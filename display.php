<?php


$W_ID = "";
$W_NAME = "";
$W_DOB = "";
$W_BLOOD = "";
$W_MARRIGE = "";
$W_OFFICE = "";
$W_RESIDENCE = "";
$W_PERMANENT = "";
$W_OFFICE_C = "";
$W_HOME = "";
$W_MOBILE = "";
$W_EMAIL = "";
$W_EDUCATION = "";
$W_SKILL = "";
$W_INTEREST = "";
$W_DESIGNATION = "";
$W_POSTING = "";
$W_CADRE = "";
$W_BATCH = "";
$W_MEMBERSHIP = "";
$W_HONOR = "";
$W_ARTICLE = "";
$W_CHILD = "";
$W_PICTURE = "";
$W_SIGNATURE = "";


session_start();
if (!isset($_SESSION['MOBILE'])) {
	header("location:login.php");
} else {
	set_time_limit(1000);
	include 'Connection.php';



	$sql = "SELECT * FROM TEST.BCSWN_USER WHERE MOBILE='" . $_SESSION['MOBILE'] . "'";

	// $sql = "SELECT * FROM PCC.PC_CUSTOMERS_CORR WHERE BILL_CYCLE_CODE='".$bill_cycle."'";

	$parseresults = ociparse($conn, $sql);
	ociexecute($parseresults);

	// var_dump($parseresults);

	while ($row = oci_fetch_assoc($parseresults)) {
		// $cust_num = $row['CUSTOMER_NUM'];

		// $cust_chk_digit = $row['CUST_CHK_DIGIT'];
		// $primary_key = $cust_num . $cust_chk_digit;
		// $bill_cycle_code = $row['BILL_CYCLE_CODE'];
		// $cl_sr_reading = $row['CL_SR_READING'];
		// $cl_pk_reading = $row['CL_PK_READING'];
		// $cl_off_pk_reading = $row['CL_OFF_PK_READING'];

		$output[] = $row;
	}

	// var_dump($output);

	for ($i = 0; $i < count($output); $i++) {
		$W_NAME = $output[$i]['NAME'];
		$W_DOB = $output[$i]['DOB'];
		$W_BLOOD = $output[$i]['BLOOD'];
		$W_MARRIGE = $output[$i]['MARRIGE'];
		$W_OFFICE = $output[$i]['OFFICE'];
		$W_RESIDENCE = $output[$i]['RESIDENCE'];
		$W_PERMANENT = $output[$i]['PERMANENT'];
		$W_OFFICE_C = $output[$i]['OFFICE_C'];
		$W_HOME = $output[$i]['HOME'];
		$W_MOBILE = $output[$i]['MOBILE'];
		$W_EMAIL = $output[$i]['EMAIL'];
		$W_EDUCATION = $output[$i]['EDUCATION'];
		$W_SKILL = $output[$i]['SKILL'];
		$W_INTEREST = $output[$i]['INTEREST'];
		$W_DESIGNATION = $output[$i]['DESIGNATION'];
		$W_POSTING = $output[$i]['POSTING'];
		$W_CADRE = $output[$i]['CADRE'];
		$W_BATCH = $output[$i]['BATCH'];
		$W_MEMBERSHIP = $output[$i]['MEMBERSHIP'];
		$W_HONOR = $output[$i]['HONOR'];
		$W_CHILD = $output[$i]['CHILD'];
		$W_PICTURE = $output[$i]['PICTURE'];
		$W_SIGNATURE = $output[$i]['SIGNATURE'];
	}






	oci_free_statement($parseresults);
	oci_close($conn);
}


?>

<?php

set_time_limit(1000);
include 'Connection.php';

//  $W_ID = "";
//  $W_NAME = "";
//  $W_DOB = "";
//  $W_BLOOD = "";
//  $W_MARRIGE = "";
//  $W_OFFICE = "";
//  $W_RESIDENCE = "";
//  $W_PERMANENT = "";
//  $W_OFFICE_C = "";
//  $W_HOME = "";
//  $W_MOBILE = "";
//  $W_EMAIL = "";
//  $W_EDUCATION = "";
//  $W_SKILL = "";
//  $W_INTEREST = "";
//  $W_DESIGNATION = "";
//  $W_POSTING = "";
//  $W_CADRE = "";
//  $W_BATCH = "";
//  $W_MEMBERSHIP = "";
//  $W_HONOR = "";
//  $W_ARTICLE = "";
//  $W_CHILD = "";
//  $W_PICTURE = "";
//  $W_SIGNATURE = "";

if (isset($_POST['submit'])) {

	// $W_PK = $_POST['pk']; 
	// echo $W_PK;
	$W_NAME = $_POST['name'];
	// echo $W_NAME;
	$W_DOB =  $_POST['dob'];
	$W_BLOOD = $_POST['blood'];
	if (isset($_POST['marrige'])) {

		$W_MARRIGE = $_POST['marrige'];
	}

	$W_OFFICE = $_POST['office'];
	$W_RESIDENCE = $_POST['residence'];
	$W_PERMANENT = $_POST['permanent'];
	$W_OFFICE_C = $_POST['office_c'];
	$W_HOME = $_POST['home'];
	$W_MOBILE = $_POST['mobile'];

	$W_EMAIL = $_POST['email'];
	$W_EDUCATION = $_POST['education'];
	$W_SKILL = $_POST['skill'];
	$W_INTEREST = $_POST['interest'];
	$W_DESIGNATION = $_POST['designation'];
	$W_POSTING = $_POST['posting'];
	$W_CADRE = $_POST['cadre'];
	$W_BATCH = $_POST['batch'];
	$W_MEMBERSHIP = $_POST['membership'];
	$W_HONOR = $_POST['honor'];
	$W_ARTICLE = $_POST['article'];
	$W_CHILD = $_POST['child'];


	//FILE UPLOAD   
	$file = $_FILES['picture'];

	// print_r($file);

	$fileName = $_FILES['picture']['name'];
	$fileTmpName = $_FILES['picture']['tmp_name'];
	$fileSize = $_FILES['picture']['size'];
	$fileError = $_FILES['picture']['error'];
	$fileType = $_FILES['picture']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				// $fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileNameNew = "dp_" . $W_MOBILE . "." . $fileActualExt;
				$fileDestination = 'upload/' . $fileNameNew;
				$W_PICTURE = $fileDestination;
				// echo $fileDestination;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "Your file is too big";
			}
		} else {

			echo "There was an error uploading your file";
		}
	} else {
		echo "You can not upload files of this type";
	}



	// echo $fileDestination;

	// $sql1 = "INSERT INTO TEST.BCSWN_USER(ID, NAME, DOB, BLOOD, OFFICE, RESIDENCE, PERMANENT, OFFICE_C, HOME, MOBILE, EMAIL, EDUCATION, SKILL, INTEREST, DESIGNATION, POSTING, CADRE, BATCH, MEMBERSHIP, HONOR, ARTICLE, CHILD) VALUES(INC.NEXTVAL, '". $W_NAME ."', '". $W_DOB."', '". $W_BLOOD ."', '". $W_OFFICE ."', '". $W_RESIDENCE ."', '". $W_PERMANENT ."', '". $W_OFFICE_C ."', '". $W_HOME ."', '". $W_MOBILE ."', '". $W_EMAIL ."', '". $W_EDUCATION  ."', '". $W_SKILL ."', '".  $W_INTEREST ."', '".  $W_DESIGNATION ."', '". $W_POSTING ."', '". $W_CADRE ."', '".  $W_BATCH ."', '".  $W_MEMBERSHIP ."', '". $W_HONOR ."', '".  $W_ARTICLE ."', '". $W_CHILD ."'  )";

	$sql = "INSERT INTO TEST.BCSWN_USER(ID, NAME, DOB, BLOOD, OFFICE, RESIDENCE, PERMANENT, OFFICE_C, HOME, MOBILE, EMAIL, EDUCATION, SKILL, INTEREST, DESIGNATION, POSTING, CADRE, BATCH, MEMBERSHIP, HONOR, ARTICLE, CHILD, MARRIGE, PICTURE) 
        VALUES(INC.NEXTVAL,'" . $W_NAME . "',TO_DATE('" .
		$W_DOB . "', 'YYYY-MM-DD'), '" . $W_BLOOD . "', '" . $W_OFFICE . "', '" . $W_RESIDENCE . "','" . $W_PERMANENT . "', '" . $W_OFFICE_C . "', '" . $W_HOME . "', '" . $W_MOBILE . "', '" . $W_EMAIL . "','" . $W_EDUCATION . "','" . $W_SKILL . "','" . $W_INTEREST . "','" . $W_DESIGNATION . "','" . $W_POSTING . "', '" . $W_CADRE . "','" . $W_BATCH . "', '" . $W_MEMBERSHIP . "', '" . $W_HONOR . "','" . $W_ARTICLE . "','" . $W_CHILD . "','" . $W_MARRIGE . "', '" . $W_PICTURE  . "')";

	// print_r($sql);
	$parseresults = ociparse($conn, $sql);
	ociexecute($parseresults);

	oci_free_statement($parseresults);
	oci_close($conn);

	header("Location: view.php?u=$W_MOBILE");
}


// error_reporting(0);




?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		header {
			height: 40%;
			background-color: #76A28D;
		}

		header h1 {
			padding: 10px;
		}

		.bg_color {
			background-color: #76a28d !important;
		}

		/* header css starts  */
		.note {
			text-align: center;
			height: 15%;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 80px;
		}

		/* header css ends */


		/* form section css start */
		.section_part {
			color: #4287f5;
		}

		.section_part:hover {
			color: #4287f5;
			cursor: pointer;

		}



		/* form section css end  */
	</style>



	<title>Hello, world!</title>
</head>

<body>



	<!-- <header class="text-center">
        <h2>Registration</h2>
    </header> -->


	<!-- header starts  -->

	<div class="note">
		<!-- <p>This is a simpleRegister Form made using Boostrap.</p> -->

		<legend>
			<center>



				<div class="row">

					<div class="col-md-2" style="padding-right: 0!important;">
						<!-- <img class=" mt-2 mb-2 logo" src="./image/Logo.png" alt="BPDB" height="80px" width="80px"> -->
					</div>

					<div class="col-md-8 m-4">
						<center>
							<h1><b>Registration</b></h1>
							<!-- <h4>বিক্রয় ও বিতরণ বিভাগ- স্টেডিয়াম, বিউবো, চট্টগ্রাম ।</h4> -->
						</center>
					</div>
					<div class="col-md-2"></div>

				</div>
			</center>
		</legend>
	</div>
	<!-- header ends  -->




	<!-- <div class="jumbotron jumbotron-fluid bg_color">
        <div class="container text-center">
            <h1>Registration</h1>

        </div>
    </div> -->

	<div class="container">

		<!-- form stars 		 -->
		<form action="" method="POST" enctype="multipart/form-data">

			<!-- section 1 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button disabled class='btn btn-link section_part' id="section_1_label">
                            Section 1 : Personal Information
                        </button> -->

							<p class="section_part btn btn-link" id="section_1_label" style="font-size:22px;">Section 1 : Personal Information
							</p>

						</div>

						<div class="card-body" id="section_1_content">

							<!-- name starts -->
							<div class="form-group">
								<label class="form-label" for="name">Name :</label>
								
								<input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?php echo  $W_NAME; ?>">
							</div>
							<!-- name ends  -->

							<div class="row">

								<!-- Birthday starts  -->
								<div class="form-group col-4 ">
									<label class="form-label" for="dob">Date of Birth :</label>
									<input type="date" name="dob" id="dob" class="form-control">
								</div>
								<!-- Birthday ends  -->

								<!-- Blood starts  -->
								<div class="form-group col-4 pl-0">
									<label class="form-label" for="dob">Blood Group :</label>
									<input type="text" class="form-control" placeholder="Enter Blood Group" name="blood" id="blood">
								</div>
								<!-- Blood ends  -->

								<!-- Marital starts  -->
								<div class="form-group col-4 pl-0">
									<label class="form-label d-block">Marital Status :</label>
									<label class="radio-inline">
										<input type="radio" name="marrige" value="married">Married
									</label>
									<label class="radio-inline">
										<input type="radio" name="marrige" value="divorced">Divorced
									</label>
									<label class="radio-inline">
										<input type="radio" name="marrige" value="widow">Widow
									</label>
									<label class="radio-inline">
										<input type="radio" name="marrige" value="single">Single
									</label>

								</div>
								<!-- Blood ends  -->
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- section 1 ends  -->

			<!-- section 2 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_2_label">
                            Section 2 : My Picture Upload
                        </button> -->
							<p class="section_part btn btn-link" id="section_2_label" style="font-size:22px;">Section 2 : My Picture Upload</p>

						</div>
						<div class="card-body" id="section_2_content">
							<!-- picture starts -->
							<div class="form-group col-6">
								<label class="form-label" for="picture">My Picture :</label>
								<input type="file" class="form-control" name="picture" id="picture">
							</div>
							<!-- picture ends  -->
						</div>

					</div>
				</div>
			</div>
			<!-- section 2 ends  -->

			<!-- section 3 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_3_label">
                            Section 3 : Address Information
                        </button> -->
							<p class="section_part btn btn-link" id="section_3_label" style="font-size:22px;">Section 3 : Address Information
							</p>


						</div>
						<div class="card-body" id="section_3_content">
							<div class="row">
								<div class="col-12">
									<h5>Address </h5>
									<hr>
									<!-- office starts  -->
									<div class="form-group row">
										<label for="office" class="col-sm-2 col-form-label">Office :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="office" id="office" placeholder="Office Address">
										</div>
									</div>
									<!-- office ends  -->

									<!-- residence starts  -->
									<div class="form-group row">
										<label for="residence" class="col-sm-2 col-form-label">Residence :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="residence" id="residence" placeholder="Residence Address">
										</div>
									</div>
									<!-- residence ends  -->

									<!-- parmanent starts  -->
									<div class="form-group row">
										<label for="permanent" class="col-sm-2 col-form-label">Permanent :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="permanent" id="permanent" placeholder="Permanent Address">
										</div>
									</div>
									<!-- parmanent ends  -->
								</div>
								<div class="col-12">
									<h5>Contact Details </h5>
									<hr>

									<!-- office starts  -->
									<div class="form-group row">
										<label for="office_c" class="col-sm-2 col-form-label">Office :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="office_c" id="office_c" placeholder="Office Address">
										</div>
									</div>
									<!-- office ends  -->

									<!-- home starts  -->
									<div class="form-group row">
										<label for="home" class="col-sm-2 col-form-label">Home :</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="home" id="home" placeholder="Home Address">
										</div>
									</div>
									<!-- home ends  -->

									<!-- mobile starts  -->
									<div class="form-group row">
										<label for="mobile" class="col-sm-2 col-form-label">Mobile :</label>
										<div class="col-sm-6">
											<input type="text" maxLength="11" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
										</div>
									</div>
									<!-- mobile ends  -->

									<!-- email starts  -->
									<div class="form-group row">
										<label for="email" class="col-sm-2 col-form-label">Email :</label>
										<div class="col-sm-6">
											<input type="email" class="form-control" name="email" id="email" placeholder="Email">
										</div>
									</div>
									<!-- email ends  -->
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- section 3 ends  -->

			<!-- section 4 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_4_label">
                            Section 4 : Educational Qualification & Skills
                        </button> -->
							<p class="section_part btn btn-link" id="section_4_label" style="font-size:22px;">Section 4 : Educational
								Qualification & Skills</p>

						</div>
						<div class="card-body" id="section_4_content">
							<!-- education starts -->
							<div class="form-group">
								<label class="form-label" for="education">Educational Qualification :</label>
								<input type="text" class="form-control" placeholder="Educational Qualification" name="education" id="education">
							</div>
							<!-- education ends  -->

							<!-- skill starts -->
							<div class="form-group">
								<label class="form-label" for="skill">Language Skills:</label>
								<input type="text" class="form-control" placeholder="Language Skills" name="skill" id="skill">
							</div>
							<!-- skill ends  -->
						</div>

					</div>
				</div>
			</div>
			<!-- section 4 ends  -->

			<!-- section 5 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_5_label">
                            Section 5 : Interest & Hobbies
                        </button> -->
							<p class="section_part btn btn-link" id="section_5_label" style="font-size:22px;">Section 5 : Interest & Hobbies</p>

						</div>
						<div class="card-body" id="section_5_content">
							<!-- interest starts -->
							<div class="form-group">
								<label class="form-label" for="interest">Interest & Hobbies:</label>
								<input type="text" class="form-control" placeholder="Interest & Hobbies" name="interest" id="interest">
							</div>
							<!-- interest ends  -->
						</div>

					</div>
				</div>
			</div>
			<!-- section 5 ends  -->

			<!-- section 6 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_6_label">
                            Section 6 : Proffesional Records
                        </button> -->
							<p class="section_part btn btn-link" id="section_6_label" style="font-size:22px;">Section 6 : Proffesional Records
							</p>

						</div>
						<div class="card-body" id="section_6_content">

							<!-- designation starts  -->
							<div class="form-group row">
								<label for="designation" class="col-sm-2 col-form-label">Designation :</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
								</div>
							</div>
							<!-- designation ends  -->

							<!-- posting starts  -->
							<div class="form-group row">
								<label for="posting" class="col-sm-2 col-form-label">Place of Posting :</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="posting" id="posting" placeholder="Place of Posting">
								</div>
							</div>
							<!-- posting ends  -->


							<div class="row">
								<!-- Cadre starts  -->
								<div class="form-group col-4">
									<label class="form-label" for="cadre">Cadre :</label>
									<input type="text" class="form-control" placeholder="Cadre" name="cadre" id="cadre">
								</div>
								<!-- Cadre ends  -->

								<!-- Batch starts  -->
								<div class="form-group col-4 pl-0">
									<label class="form-label" for="batch">Batch :</label>
									<input type="text" class="form-control" placeholder="Batch" name="batch" id="batch">
								</div>
								<!-- Batch ends  -->
							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- section 6 ends  -->

			<!-- section 7 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_7_label">
                            Section 7 : Proffesional Membership
                        </button> -->
							<p class="section_part btn btn-link" id="section_7_label" style="font-size:22px;">Section 7 : Proffesional
								Membership</p>

						</div>
						<div class="card-body" id="section_7_content">
							<!-- membership starts -->
							<div class="form-group">
								<label class="form-label" for="membership">Proffesional Membership:</label>
								<input type="text" class="form-control" placeholder="Proffesional Membership" name="membership" id="membership">
							</div>
							<!-- membership ends  -->
						</div>

					</div>
				</div>
			</div>
			<!-- section 7 ends  -->

			<!-- section 8 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_8_label">
                            Section 8 : Honors & Awards Received
                        </button> -->
							<p class="section_part btn btn-link" id="section_8_label" style="font-size:22px;">Section 8 : Honors & Awards
								Received</p>

						</div>
						<div class="card-body" id="section_8_content">
							<!-- honor starts -->
							<div class="form-group">
								<label class="form-label" for="honor">Honors & Awards Received:</label>
								<input type="text" class="form-control" placeholder="Honors & Awards Received" name="honor" id="honor">
							</div>
							<!-- honor ends  -->

						</div>

					</div>
				</div>
			</div>
			<!-- section 8 ends  -->

			<!-- section 9 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_9_label">
                            Section 9 : Publications & Articles
                        </button> -->
							<p class="section_part btn btn-link" id="section_9_label" style="font-size:22px;">Section 9 : Publications &
								Articles</p>

						</div>
						<div class="card-body" id="section_9_content">
							<!-- article starts -->
							<div class="form-group">
								<label class="form-label" for="article">Publications & Articles:</label>
								<input type="text" class="form-control" placeholder="Publications & Articles" name="article" id="article">
							</div>
							<!-- article ends  -->

						</div>

					</div>
				</div>
			</div>
			<!-- section 9 ends  -->


			<!-- section 10 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_8_label">
                            Section 8 : Honors & Awards Received
                        </button> -->
							<p class="section_part btn btn-link" id="section_10_label" style="font-size:22px;">Section 10 : Family Information</p>

						</div>
						<div class="card-body" id="section_10_content">
							<!-- children starts -->
							<div class="form-group">
								<label class="form-label" for="child">Number Of Children(If Any) :</label>
								<input type="number" min="0" class="form-control" placeholder="Number Of Children" name="child" id="child">
							</div>
							<!-- children ends  -->

						</div>

					</div>
				</div>
			</div>
			<!-- section 10 ends  -->

			<!-- section 11 starts  -->

			<div class="row container m-2">
				<div class="col-12">
					<div class="card " style="width: 95%">
						<div class="card-header " style="background-color: #C0C0C0!important;">
							<!-- <button class='btn btn-link section_part' id="section_10_label">
                            Section 10 : My Signature Upload
                        </button> -->
							<p class="section_part btn btn-link" id="section_11_label" style="font-size:22px;">Section 11 : My Signature Upload
							</p>

						</div>
						<div class="card-body" id="section_11_content">
							<!-- signature starts -->
							<div class="form-group col-6">
								<label class="form-label" for="picture">My Signature :</label>
								<input type="file" class="form-control" name="signature" id="signature">
							</div>
							<!-- signature ends  -->
						</div>

					</div>
				</div>
			</div>
			<!-- section 11 ends  -->



			<div class="container mt-4" style="width:15%">

				<button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
			</div>
		</form>
	</div>







	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		$(document).ready(function() {

			$("#section_2_content").hide();
			$("#section_3_content").hide();
			$("#section_4_content").hide();
			$("#section_5_content").hide();
			$("#section_6_content").hide();
			$("#section_7_content").hide();
			$("#section_8_content").hide();
			$("#section_9_content").hide();
			$("#section_10_content").hide();
			$("#section_11_content").hide(500);

			$("#section_1_label").click(function() {
				$("#section_1_content").slideToggle();

				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_2_label").click(function() {
				$("#section_2_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_3_label").click(function() {
				$("#section_3_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_4_label").click(function() {
				$("#section_4_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_5_label").click(function() {
				$("#section_5_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_6_label").click(function() {
				$("#section_6_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_7_label").click(function() {
				$("#section_7_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_8_label").click(function() {
				$("#section_8_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_9_label").click(function() {
				$("#section_9_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_10_content").hide(500);
				$("#section_11_content").hide(500);
			});
			$("#section_10_label").click(function() {
				$("#section_10_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_11_content").hide(500);
			});

			$("#section_11_label").click(function() {
				$("#section_11_content").slideToggle();

				$("#section_1_content").hide(500);
				$("#section_2_content").hide(500);
				$("#section_3_content").hide(500);
				$("#section_4_content").hide(500);
				$("#section_5_content").hide(500);
				$("#section_6_content").hide(500);
				$("#section_7_content").hide(500);
				$("#section_8_content").hide(500);
				$("#section_9_content").hide(500);
				$("#section_10_content").hide(500);
			});
		});
	</script>



</body>

</html>
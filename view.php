<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="./image/icon.ico" type="image/ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
	<!-- <link rel="stylesheet" href="./css/style.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />


	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		/* header {
        height: 40%;
        background-color: #76A28D;
    } */

		.note h1 {
			padding: 10px;
		}



		/* .header {
      text-transform: uppercase;
      text-align: center;
      
      
      line-height: 48px;
      padding-bottom: 2rem;
      
      background: linear-gradient(to right,  #f4524d 0%,  #5543ca 100%); 
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
  } */

		.lbl_title {
			text-align: center;
			font-size: 2rem;
			font-weight: bold;
		}

		/* .title{
		 text-align: center; 
			height: 15%;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 10px;
		}  */

		.logo {
			float: right;
		}

		.note {
			text-align: center;
			height: 15%;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 80px;
		}





		.forward {
			position: relative;
			display: inline-block;
			padding: 10px 30px;
			text-decoration: none;
			text-transform: uppercase;
			/* color: rgba(255, 255, 255, 0.4); */
			color: #262c37;
			/* background: #262c37; */
			background: #09790e;
			letter-spacing: 2px;
			font-size: 16px;
			transition: 0.5s;
		}

		.backoword {
			position: relative;
			display: inline-block;
			padding: 10px 30px;
			text-decoration: none;
			text-transform: uppercase;
			/* color: rgba(255, 255, 255, 0.4); */
			/* color: rgba(255, 255, 255, 0.4); */
			color: #262c37;
			/* background: #262c37; */
			background: #fd1d1d;
			letter-spacing: 2px;
			font-size: 16px;
			transition: 0.5s;
		}

		.clearfix {
			overflow: auto;
		}

		a:hover {
			color: rgba(255, 255, 255, 1);
			text-decoration: none;
		}

		a span {
			display: block;
			position: absolute;
			background: #262c37;
			;
			/* background: #2894ff; */
			border: 1px solid;
		}

		a span:nth-child(1) {
			left: 0;
			bottom: 0;
			width: 1px;
			height: 100%;
			transform: scaleY(0);
			transform-origin: top;
			transition: transform 0.5s;
		}

		a:hover span:nth-child(1) {
			transform: scaleY(1);
			transform-origin: bottom;
			transition: transform 0.5s;
		}

		a span:nth-child(2) {
			left: 0;
			bottom: 0;
			width: 100%;
			height: 1px;
			transform: scalex(0);
			transform-origin: right;
			transition: transform 0.5s;
		}

		a:hover span:nth-child(2) {
			transform: scaleY(1);
			transform-origin: left;
			transition: transform 0.5s;
		}

		a span:nth-child(3) {
			right: 0;
			bottom: 0;
			width: 1px;
			height: 100%;
			transform: scaley(0);
			transform-origin: top;
			transition: transform 0.5s;
		}

		a:hover span:nth-child(3) {
			transform: scaleY(1);
			transform-origin: bottom;
			transition: transform 0.5s;
		}

		a span:nth-child(4) {
			left: 0;
			top: 0;
			width: 100%;
			height: 1px;
			transform: scalex(0);
			transform-origin: right;
			transition: transform 0.5s;
			transition-delay: 0.5s;
		}

		a:hover span:nth-child(4) {
			transform: scaleY(1);
			transform-origin: left;
			transition: transform 0.5s;
			transition-delay: 0.5s;

		}

		@media only screen and (max-width: 770px) {
			.logo {
				float: none !important;
			}
		}
	</style>

</head>

<body>

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



	<?php

	set_time_limit(1000);
	include 'Connection.php';

	if (isset($_GET['u'])) {
		$ck = $_GET['u'];
	}

	$sql = "SELECT * FROM TEST.BCSWN_USER WHERE MOBILE='" . $ck . "'";

	$parseresults = ociparse($conn, $sql);
	// var_dump ($parseresults);
	ociexecute($parseresults);

	while (($row = oci_fetch_array($parseresults)) != false) {
		$output[] = $row;
	}

	for ($i = 0; $i < count($output); $i++) {

	?>


		<!-- report starts  -->
		<section class="header">
			<h1 class="lbl_title m-3"><u> Information </u></h1>

			<div class="container">

				<div class="card">
					<div class="card-header">

						<!-- name & dp starts  -->

						<div class="row">
							<div class="col-6">
								<h5 style="display: inline-block;">Name : </h5>
								<label name="name" id="name"><?php echo $output[$i]['NAME'] ?></label>

							</div>
							<div class="col-6 text-right">
							<img name="picture" id="picture" src="<?php echo $output[$i]['PICTURE']?>">
							</div>
						</div>

						<!-- name & dp ends  -->

						<!-- DOB, Blodd, Marital starts  -->
						<div class="row">
							<div class="col-12">
								<h5 class="d-inline">Date of Birth :</h5>
								<label  name="dob" id="dob"><?php echo $output[$i]['DOB'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Blood Group :</h5>
								<label name="blood" id="blood"><?php echo $output[$i]['BLOOD'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Marital Status :</h5>
								<label name="marrige"><?php echo $output[$i]['MARRIGE'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">No of Child :</h5>
								<label   name="child" id="child"><?php echo $output[$i]['CHILD'] ?></label>
							</div>
						</div>
						<!-- DOB, Blodd, Marital ends  -->

						<!-- address starts  -->
						<div class="row">
							<div class="col-6">
								<h4>Address</h4>
								<hr>
								<h5 class="d-inline">Office : </h5>
								<label name="office" id="office" ><?php echo $output[$i]['OFFICE'] ?></label>
								<br>
								<h5 class="d-inline">Residence : </h5>
								<label name="residence" id="residence"><?php echo $output[$i]['RESIDENCE'] ?></label>
								<br>
								<h5 class="d-inline">Permanent : </h5>
								<label  name="permanent" id="permanent" ><?php echo $output[$i]['PERMANENT'] ?></label>
							</div>
							<div class="col-6">
								<h4>Contact Details</h4>
								<hr>
								<h5 class="d-inline">Office : </h5>
								<label name="office_c" id="office_c"><?php echo $output[$i]['OFFICE_C'] ?></label>
								<br>
								<h5 class="d-inline">Home : </h5>
								<label name="home" id="home"><?php echo $output[$i]['HOME'] ?></label>
								<br>
								<h5 class="d-inline">Mobile : </h5>
								<label name="mobile" id="mobile"><?php echo $output[$i]['MOBILE'] ?></label>
								<br>
								<h5 class="d-inline">Email : </h5>
								<label name="email" id="email"><?php echo $output[$i]['EMAIL'] ?></label>
							</div>
						</div>
						<!-- address ends  -->



						<!-- skill starts  -->


						<div class="row">
							<div class="col-12">
								<h5 class="d-inline">Educational Qualification :</h5>
								<label name="education" id="education"><?php echo $output[$i]['EDUCATION'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Language Skills :</h5>
								<label name="skill" id="skill"><?php echo $output[$i]['SKILL'] ?></label>
							</div>
						</div>

						<!-- skill ends  -->

						<!-- Hobby starts  -->
						<div class="row">
							<div class="col-12">
								<h5 class="d-inline">Interest & Hobbies:</h5>
								<label name="interest" id="interest"><?php echo $output[$i]['INTEREST'] ?></label>
							</div>
						</div>
						<!-- Hobby ends  -->


						<!-- record starts  -->
						<div class="row">
							<div class="col-12">
								<h5 class="d-inline">Designation :</h5>
								<label name="designation" id="designation" ><?php echo $output[$i]['DESIGNATION'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Place Of Posting :</h5>
								<label name="posting" id="posting"><?php echo $output[$i]['POSTING'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Cadre :</h5>
								<label name="cadre" id="cadre"><?php echo $output[$i]['CADRE'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Batch :</h5>
								<label  name="batch" id="batch"><?php echo $output[$i]['BATCH'] ?></label>
							</div>
						</div>


						<!-- record ends  -->

						<!-- Membership starts  -->

						<div class="row">
							<div class="col-12">
								<h5 class="d-inline">Professional Membership :</h5>
      
								<label  name="membership" id="membership"><?php echo $output[$i]['MEMBERSHIP'] ?></label>
							</div>

							<div class="col-12">
								<h5 class="d-inline">Honors & Awards Recieved:</h5>

								<label   name="honor" id="honor"><?php echo $output[$i]['HONOR'] ?></label>
							</div>
							<div class="col-12">
								<h5 class="d-inline">Publications & Articles :</h5>
								<label  name="article" id="article"><?php echo $output[$i]['ARTICLE'] ?></label>
							</div>
						</div>

						<!-- Membership ends -->



						<!-- Signature Start -->

						<div class="row">
							<div class="col-6">
								<h5 class="d-inline">Signature :</h5>

							</div>

						</div>


						<!-- Signature End -->

					</div>




				</div>
				<div class="card-footer mt-4">
					<div class="btn_div">
						<a href="#" class="backoword">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<b>Backward</b>
						</a>
						<a href="#" style="float:right;" class="forward">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<b>ok</b>
						</a>
					</div>

				</div>
			</div>

			</div>
		</section>
		<!-- report ends  -->



	<?php
	}


	oci_free_statement($parseresults);
	oci_close($conn);






	?>






	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

</html>
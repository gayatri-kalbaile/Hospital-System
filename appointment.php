<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Dr. Ulhas Patil Medical College and General Hospital, Sakegaon : Home</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" Department="" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/JiSlider.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">

<style>
	.img-responsive{
		padding: 10px;
		height: 280px;
	}
</style>
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
								<ul class="top_agile_w3l_info_icons">
									<li><i class="fa fa-home" aria-hidden="true"></i>Dr. Ulhas Patil Medical College and General Hospital, Sakegaon</li>
									<li class="second"><i class="fa fa-phone" aria-hidden="true"></i>(0257)2366777,700,701</li>
									
									<li><i class="fa fa-fax" aria-hidden="true"></i><a href="mailto:maria@example.com">Fax No.(0257)2366648</a></li>
								</ul>

						</div>
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
			</div>				

			<?php include("nav.php");
?>
</div>


<!-- banner -->
<!-- banner1 -->
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Appointment</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Appointment</h2>
			        <p class="sub_t_agileits">Book Your Appointment Here..</p>

					<div class="book-appointment">
						<h4>Make an appointment</h4>
								<form action="#" method="post">
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<p>Patient Name</p>
										<input type="text" name="basicname" placeholder="" required=""/>
								</div>	
									<div class="gaps">	
									<p>Phone Number</p>
										<input type="text" name="basicPhone_no" placeholder="" required=""/>
									</div>
									<div class="gaps">
									<p>Email</p>
											<input type="email" name="basicEmail" placeholder="" required="" />
									</div>	
									<div class="gaps">
									<p>Symptoms</p>
											<textarea name="basicsymtoms" placeholder="" required="" ></textarea>
									</div>
								</div>

								<div class="right-agileinfo same">
								<div class="gaps">
									<p>Select Date</p>		
											<input  id="datepicker1" name="adate" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="gaps">
									<p>Department</p>	
										<select class="option"  name="basicdepartment">
											<option></option>
											<option>Cardiology</option>
											<option>Ophthalmology</option>
											<option>Neurology</option>
											<option>Psychology</option>
											<option>Dermatology</option>
										</select>
								</div>
								<div class="gaps">
									<p>Gender</p>	
									 
										<select class="option" name="basicGender">
											<option></option>
											<option>Male</option>
											<option>Female</option>
										</select>
								</div>
								<div class="gaps">
									<p>Time</p>		
										<input type="text" id="timepicker" name="atime" class="timepicker option" value="">	
								</div>
								</div>
								<div class="clearfix"></div>
											  <input type="submit" name="submit" value="Make an Appointment">
								</form>
							</div>
					   </div>

		</div>
	</div>
<!-- icons -->




<!-- footer -->

<?php


include "connection.php";



if (isset ($_POST['submit']))   {

    extract($_POST);

    // $a = " INSERT INTO  loginformname , Email, Phone_no , Gender , department , adate, atime,symtoms) values 
	// ('$basicname','$basicEmail' , '$basicPhone_no' , '$basicGender' , '$basicdepartment' , '$adate' ,'$atime' ,'$basicsymtoms')"

    
    $a = "INSERT INTO loginform(name , Email, Phone_no , Gender , department , adate, atime,symtoms)
    VALUES('$basicname','$basicEmail' , '$basicPhone_no' , '$basicGender' , '$basicdepartment' , '$adate' ,'$atime' ,'$basicsymtoms')";


	$b = mysqli_query($connect , $a) or die (mysqli_error($connect));



    if ($b) {

        echo '<script>';

        echo "alert('record inserted');";

        echo 'window.location.href="appointment.php";';

		echo "</script>";


    }





    
}

?>



<?php include("footer.php");
?>



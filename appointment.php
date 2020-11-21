<!DOCTYPE html>
<html>
    <head>
        <title>
            Patient Information
        </title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Doctor&Me</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/D&M.PNG" rel="icon">
        <!link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="assets/css/appointment.css" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Rapid - v2.2.0
        * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
        
        <style>
		 #try{
    		background: white url(assets/img/pin.png) right no-repeat;
  		}	
		</style>
	
    </head>

    <body>
		  <!-- ======= Header ======= -->
		  <header id="header" class="fixed-top header-transparent">
			<div class="container d-flex align-items-center">
  
			  <h1 class="logo mr-auto"><a href="index.html">Doctor & Me<h6 style="color: #db880a; text-align: center ;font-size: 15px;">health care anywhere</h6></a></h1>
			  
			  <!-- Uncomment below if you prefer to use an image logo -->
			  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
			  <nav class="main-nav d-none d-lg-block">
				<ul>
				  <li class="active"><a href="index.html">Home</a></li>
				  
				  <li><a href="#services">Actions</a></li>
				  <li class="drop-down"><a href="#">Departments</a>
					<ul>
					  <li><a href="#">General</a></li>
					  <li class="drop-down"><a href="#">Skin Problems</a>
						<ul>
						  <li><a href="#">Deep Drop Down 1</a></li>
						  <li><a href="#">Deep Drop Down 2</a></li>
						  <li><a href="#">Deep Drop Down 3</a></li>
						  <li><a href="#">Deep Drop Down 4</a></li>
						  <li><a href="#">Deep Drop Down 5</a></li>
						</ul>
					  </li>
					  <li><a href="#">Gynaecologist</a></li>
					  <li><a href="#">orthopedic</a></li>
					  <li><a href="#">pediatrician</a></li>
					  <li><a href="#">Cardiologist</a></li>
					</ul>
				  </li>
				  <li><a href="login.html" style="color: red;">Logout</a></li>
				  
				  
				  <li class="drop-down"><a href="#">Profile</a>
				  <ul>
					<li><a href="patientinfo.php">Personal Information</a></li>
					<li><a href="appointment.php">Appointment</a></li>
					<li><a href="#">Switch to Doctor Profile</a></li>
					<li><a href="#">See prescriptions &<br>medical records</br> </a></li>
					<li><a href="#">Settings</a></li>
				</ul>
				</li>
			  </nav><!-- .main-nav-->
  
			</div>
		  </header><!-- End Header -->

		  <form method="POST" class="bookappointment" id="bookappointment" action="appointment_action.php"> 
		  <!-- Location -->
		  <div class="form1" style="margin-left: 100px;">
				<div id="location" >
				  <input type="text" placeholder="Enter your location" id="try"/>
				</div>
			  <br><!-- End Location -->
		  
				<div class="row">
					<div class="col-md-3"style="margin-left: 100px;" >
					<select id="Speciality" name="Speciality" class="form-control">
						<option selected>Select an Speciality</option>
						<option>General Physician</option>
						<option>Orthopedic</option>
						<option>Gynaecologist</option>
						<option>Cardiologist</option>
						<option>Paediatrician</option>
						<option>Orthopaedic Surgeon</option>
						<option>Psychologist</option>
						<option>Dermatologist</option>
						<option>Occupational Therapist</option>
						<option>Dietitian</option>
						<option>Dentist</option>
						<option>Homeopathy</option>
						<option>Neuro Surgeon</option>
					</select>
					<textarea id="symptoms" name="symptoms" class="form-control" placeholder="What health issues are you facing" ></textarea>
					<input type="date" name="date" id="date" class="form-control" id="dob" style= "margin-top:20px"/>
					<input type="time" id="time" name="time" class="form-control" placeholder="Please enter the time-slot">
					<input type="submit" id="book" name="book" value="Book Appointment"  style="margin-top:20px"/>
				</div>
				<div style="margin-left: 400px;">
					<img src="assets/img/appointment.PNG" height="350px" width="350px">			
				</div>
				<div class="col-md-6">
								
				</div>
			</div>
		</form1>
		  </div>
		  <br>
		 <form> 
	</body>
</html>
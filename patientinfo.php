<?php
session_start();
?>

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
        <link href="assets/css/patinfo.css" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Rapid - v2.2.0
        * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
        
        <!-- CSS PART OF PATIENT INFORMATION  -->
       
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
                <li class="active"><a href="index1.html">Home</a></li>
                
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
                
                
                <li class="drop-down"><a href="#"><?php echo $_SESSION["username"]?></a>
                <ul>
                  <li><a href="patientinfo.html">Personal Information</a></li>
                  <li><a href="appointment.html">Appointment</a></li>
                  <li><a href="#">Switch to Doctor Profile</a></li>
                  <li><a href="#">See prescriptions &<br>medical records</br> </a></li>
                  <li><a href="#">Settings</a></li>
              </ul>
              </li>
            </nav><!-- .main-nav-->

          </div>
        </header><!-- End Header -->



        
      <!-- Information form -->
      <form method="POST" class="patientinfo" id="patientinfo" action="patientinfo_action.php">
      <div class="col-lg-20">
        
        <div class="form1">

           <!-- First Name and Last Name -->
                  
          <div class="form-row">
                    
            <div class="form-group col-md-4">
              <label for="fname" class="firstname">First Name</label>
              <input type="text" name="fname" class="form-control"  id="fname"/> 
              <div class="validate"></div>
            </div><!-- First Name -->

            <div class="form-group col-md-4">
              <label for="last name">Last Name</label>
              <input type="text" name="lname" class="form-control" id="lname"/> 
              <div class="validate"></div>
            </div><!--Last Name -->
                
          </div>

              <!-- Age,Gender  -->
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="last name">Age</label>
                  <input type="text" name="age" class="form-control" id="age" />
                  <div class="validate"></div>
                </div> <br><br><!--Age -->
                
                <div class="form-group col-md-4">
                  <label for="gender">Gender</label>
                  <select id="gender" name="gender" class="form-control">
                    <option selected>Select an option</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                  </select>
                </div><!--Gender -->
                
              </div><!-- Age,Gender -->
        </div>
              <div class="col-lg-20">

                <div class="form2">

                      <!--Blood Group and DOB-->
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="date of birth">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" id="dob"/> 
                            <div class="validate"></div>
                        </div><!--DOB -->
                        <div class="form-group col-md-4">
                          <label for="Blood Group">Blood Group</label>
                          <select id="blood_group" name="blood_group" class="form-control">
                            <option selected>Select an option</option>
                            <option>O+ve</option>
                            <option>A+ve</option>
                            <option>B+ve</option>
                            <option>O-ve</option>
                            <option>A-ve</option>
                            <option>B-ve</option>
                            <option>AB+ve</option>
                            <option>AB-ve</option>
                          </select>
                        </div>
                     </div><!--Blood Group and DOB-->
                     </div>

              <br>
          </div>
        </div>
          
        <div class="col-lg-10">

            <div class="form3">

              <u><h4>Contact Details</h4></u>
              <br>
              <!--Email,phoneno,tele-phone no -->
              <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email"  data-rule="email" data-msg="Please enter a valid email" readonly value="<?php echo $_SESSION['email']?>"/>
                    <div class="validate"></div>
                </div><!--Email -->
                <div class="form-group col-md-4">
                  <label for="phoneno" >Phone Number</label>
                  <input readonly type="text" class="form-control" name="phoneno" id="phoneno" value="<?php echo $_SESSION['userphone'];?>"/>
                  <div class="validate"></div>
                </div><!--phoneno-->
                <div class="form-group col-md-4">
                  <label for="teleno">Tele-phone Number</label>
                  <input type="text" class="form-control" name="teleno" id="teleno"/>
                  <div class="validate"></div>
                </div> <!--tele-phone no -->
              </div><!--Email,phoneno,tele-phone no -->
              <br>

              <u><h4>Address</h4></u>
              <br>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="house number">House No./Building name</label>
                  <input type="text" class="form-control" name="houseno" id="houseno"/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-4">
                  <label for="area">Colony/Street Name/Area</label>
                  <input type="text" class="form-control" name="area" id="area"/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-4">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" id="city"/>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="State">State</label>
                  <input type="text" class="form-control" name="state" id="state"/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-4">
                  <label for="Country">Country</label>
                  <input type="text" class="form-control" name="country" id="country"/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-4">
                  <label for="pincode">Pin-code</label>
                  <input type="text" class="form-control" name="pincode" id="pincode"/>
                  <div class="validate"></div>
                </div>
              </div>
               <br>
              <div ><input type="submit" class="subbut" type="submit" name="submit" id="submit" value="Submit"/></div>
              <br>
            
            </div>

          </div>
        </form>
  </body>
</html>

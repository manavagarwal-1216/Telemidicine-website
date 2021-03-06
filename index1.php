<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rapid - v2.2.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Doctor & Me<h6 style="color: #ad6b07; text-align: center ;font-size: 15px;">health care anywhere</h6></a></h1>
      
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
          <li><a href="login.php" style="color: red;">Logout</a></li>
          
          
          <li class="drop-down"><a href="#"><?php echo $_SESSION["username"];?></a>
          <ul>
           
            <li><a href="patientinfo.php">Patient Information</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="#">Switch to Doctor Profile</a></li>
            <li><a href="#">See prescriptions &<br>medical records</br> </a></li>
            <li><a href="#">Settings</a></li>
        </ul>
        </li>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Consult Doctors <br><span>From Anywhere</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/Doc-patient.jpeg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Quick Actions</h3>
            <!-- <p>Our List Of Services just for you!</p> -->
          </header>
  
          <div class="row">
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <div class="icon" style="background: #fceef3;"><i class="ion-ios-alert" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Covid Help</a></h4>
                <p class="description">Need a doctor for consultation on chat? Well there you go and get in touch with the doctor of your choice!</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
              <div class="box">
                <div class="icon" style="background: #fceef3;"><i class="ion-ios-chatboxes-outline" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Doctor on chat</a></h4>
                <p class="description">Need a doctor for consultation on chat? Well there you go and get in touch with the doctor of your choice!</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="box">
                <div class="icon" style="background: #fff0da;"><i class="ion-ios-videocam-outline" style="color: #e98e06;"></i></div>
                <h4 class="title"><a href="">Video Call A Doc!</a></h4>
                <p class="description">Get in touch with a doctor on video! Have a realtime experience of consulting a doctor on video</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="box">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">See Appointments</a></h4>
                <p class="description">Manage you Appoinments and prescriptions through our Website</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="box">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Information portal</a></h4>
                <p class="description">Check Update, first aid info and more! Portal for health acre information just for you!</p>
              </div>
            </div>
        </div>

    </div>
  </section><!-- End Services Section -->
   <!-- ======= Footer ======= -->
   <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Doctor & Me</h3>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>connect to us by filling the details.</p>

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

   
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

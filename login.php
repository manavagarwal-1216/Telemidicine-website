
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css_user/style.css">
</head>
<body>
    <br>
    
<div class="sign-in">
  <div class="container">
    <div style=" color: black; font-weight: bold; margin-left: 45px;">
        <a href = "index.html" style="color: black;">GO TO HOME</a>
    </div>
      <div class="signin-content">
          
          <div class="signin-image">
              <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
              <a href="register.html" class="signup-image-link">Create an account</a>
          </div>

          <div class="signin-form">
              
            <h2 class="form-title">Sign IN</h2>
              
            <form method="POST" class="register-form" id="login-form" action="login_action.php">
                  <div class="form-group">
                      <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                      <input type="tel" name="phone" id="phone" placeholder="Mobile Number"/>
                  </div>
                  <div class="form-group">
                      <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                      <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                      <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" onclick="window.location.href='index1.html';" value="Home"/>
                  </div>
              </form>
              <div class="social-login">
                  <span class="social-label">Or login with</span>
                  <ul class="socials">
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                      <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>

</div>

<!-- JS -->
<script src="assets/vendor_user/jquery/jquery.min.js"></script>
<script src="assets/js_user/main.js"></script>
</body>
</html>
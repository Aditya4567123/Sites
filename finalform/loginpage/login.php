<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/logcss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="login-form">
    <form action="../process/pscheck.php" method="GET">
      <h1>Login to The Future</h1>
      <div class="form-group">
        <input type="text" name="username" placeholder="Username">
        <span class="input-icon"><i class="fa fa-envelope"></i></span>
      </div>
      <div class="form-group">
        <input type="password" name="psw" placeholder="Password">
        <span class="input-icon"><i class="fa fa-lock"></i></span>
      </div>      
      <button class="login-btn">Login</button>      
      <a class="signup" href="signup.php">If you are new signup!</a>
      <div class="seperator"><b>or</b></div>
      <p>Sign in with your social media account</p>
      <!-- Social login buttons -->
      <div class="social-icon">
        <button type="button"><i class="fa fa-twitter"></i></button>
        <button type="button"><i class="fa fa-facebook"></i></button>
      </div>
    </form>
  </div>
</body>
</html>
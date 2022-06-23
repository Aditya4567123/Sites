<!DOCTYPE html>
    <head><title>Sign Up page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../css/signupcss.css">
    </head>
    
<form action="../process/signups.php" method="$_GET">
<h1>Sign up with The Future</h1>
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input" name="email">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="name">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="psw" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button><br>
  <div class="clearfix">
      <button type="button" class="cancelbtn" id="canbut">Cancel</button>
      <script>
       document.getElementById("canbut").addEventListener("click", myFunction);
       function myFunction() {
         window.location.href="login.php";
       }
      </script>

</form>
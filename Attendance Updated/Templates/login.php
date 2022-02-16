<?php
session_start();
  if (isset($_SESSION['userlogin'])) {
  header("location: index.php");
}
?>
<!-- style.css -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
      </style>
      <link rel="stylesheet" href="../CSS/style.css">
    <title>DMCE . Amendment Portal</title>
  <link rel="icon" href="../Resources/dmce_logo.jpeg" type="image/x-icon">
  </head>
  <body>
    <div class="option">
        <!-- Navbar -->
      <nav class="navbar"></nav>
      <div>
        <img src="../Resources/logo_blue.png" class="nav-image img-fluid" alt="DMCE" />
      </div>
      <hr />
      <!-- Navbar -->

      <div> <div class="container" style="margin-top: 50px;"> <h2 style="
color: black; text-align: center;">Log-In</h2> <form action="jslogin.php"
method="post"> <?php if (isset($_GET['error'])) { echo $_GET['error']; } ?>
<div class="form-group"> <label for="email">Email:</label> <input type="email"
class="form-control" id="email" placeholder="Email" name="email"
required="required"> </div> <div class="form-group"> <label
for="pwd">Password:</label> <input type="password" class="form-control"
id="password" placeholder="Enter password" name="password"
required="required">
 </div>
 <button type="submit" class="btn
btn-primary" id="login" name="login">Login</button> <div> Don't have an
account?&nbsp <a href="register.php" class="m1-2">SignUp</a> </div> <div> <a
href="forgot_password.php" class="m1-2">Forgot password?</a> </div> </form>
<br><br><br><br> </div> </div> </div> <!-- Optional JavaScript --> <!-- jQuery
first, then Popper.js, then Bootstrap JS --> <script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script> <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script> <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script> </body> </html>
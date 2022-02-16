<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
  header("location: login.php");
}
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/style.css"> -->
  <link rel="stylesheet" href="profile.css">
  <title>DMCE . Amendment Portal</title>
  <link rel="icon" href="resources/dmce_logo.jpeg" type="image/x-icon">
</head>

<body>
  <?php
  $id = (array_values($_SESSION['userlogin']))['0'];
  ?>

  <!-- Navbar -->
  <nav class="anavbar"></nav>
  <div>
    <img src="resources/logo_blue.png" class="nav-image img-fluid" alt="DMCE" />
  </div>
  <hr class="ahr" />
  <!-- Navbar -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Back icon -->

        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">User profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">

          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <?php
                  if ((array_values($_SESSION['userlogin']))['4'] == 'male') {
                    echo '<img src="resources/mProfile.png" class="rounded-circle"style="height:40px; width:40px">';
                  } else {
                    echo '<img src="resources/fProfile.png" class="rounded-circle"style="height:40px; width:40px">';
                  }
                  ?>


                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo (array_values($_SESSION['userlogin']))['1']
                                                                  . " " . (array_values($_SESSION['userlogin']))['2'] . " " .
                                                                  (array_values($_SESSION['userlogin']))['3'] ?>
                  </span>
                </div>
              </div>
            </a>

          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(\'resources/bldg.png\'); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h3 class="display-2 text-white">Datta Meghe College of Engineering</h3>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <?php

                    if ((array_values($_SESSION['userlogin']))['4'] == 'male') {
                      echo '<img src="resources/mProfile.png" class="rounded-circle"style="height:200px; width:200px">';
                    } else {
                      echo '<img src="resources/fProfile.png" class="rounded-circle"style="height:200px; width:200px">';
                    }
                    ?>

                  </a>

                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo (array_values($_SESSION['userlogin']))['1'] . " " . (array_values($_SESSION['userlogin']))['2'] . " " . (array_values($_SESSION['userlogin']))['3'] ?>
                </h3>
                <div>
                  <i class="ni education_hat mr-2"></i>Datta Meghe College Of Engineering
                </div>
                <hr class="my-4">
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">User account</h3>
                </div>

              </div>
            </div>
            <div class="card-body">

              <form method="POST" action="#">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">First name</label>
                        <input type="text" name="first_name" id="input-username" class="form-control form-control-alternative" placeholder="First_name" value="<?php echo (array_values($_SESSION['userlogin']))['1']; ?>" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Middle name</label>
                        <input type="text" name="middle_name" id="input-username" class="form-control form-control-alternative" placeholder="Middle name" value="<?php echo (array_values($_SESSION['userlogin']))['2']; ?>" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Last name</label>
                        <input type="text" name="last_name" id="input-username" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo (array_values($_SESSION['userlogin']))['3']; ?>" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="name@example.com" value="<?php echo (array_values($_SESSION['userlogin']))['5']; ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Gender</label>
                        <input type="text" name="gender" id="input-last-name" class="form-control form-control-alternative" placeholder="Gender" value="<?php echo (array_values($_SESSION['userlogin']))['4']; ?>" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <button type="submit" name="submit" class="btn btn-primary" style="margin-top:20px" value="upload">Upload</button>
      <input type="hidden" value="<?php echo (array_values($_SESSION['userlogin']))['0'] ?>" name="id"> -->
                <hr class="my-4">
            </div>
          </div>


          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>


  <style>
    hr {
      background-color: orange;
      border-width: 3px;
      margin-left: 2%;
      margin-right: 2%;
    }

    .anavbar {
      background-color: #04589C;
      padding: 20px;
      -webkit-box-shadow: 0 8px 6px -6px #999;
      -moz-box-shadow: 0 8px 6px -6px #999;
      box-shadow: 0 8px 6px -6px #999;
    }

    .nav-image {
      max-height: 70px;
    }

    /* Orange Line */
    .ahr {
      background-color: orange;
      border-width: 3px;
      margin-left: 2%;
      margin-right: 2%;
    }
  </style>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
$connect = mysqli_connect("localhost", "root", "", "attendance");


if (isset($_POST["submit"])) {
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $id = $_POST['id'];
  $query = "UPDATE user SET first_name='$first_name', middle_name = '$middle_name',last_name = '$last_name',email = '$email', gender = '$gender' WHERE id = '$id'";
  if (mysqli_query($connect, $query)) {
  }
}
?>
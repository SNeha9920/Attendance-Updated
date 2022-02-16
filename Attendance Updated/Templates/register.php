<!-- Separate Css -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap");
    </style>
    <style>
     body{
    background-image: url("../Resources/bg.png");
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: center;
    
    
}
      .navbar {
        background-color: #04589c;
        padding: 20px;
        -webkit-box-shadow: 0 8px 6px -6px #999;
        -moz-box-shadow: 0 8px 6px -6px #999;
        box-shadow: 0 8px 6px -6px #999;
      }
      .nav-image {
        max-height: 70px;
      }
      /* Orange Line */
      hr {
        background-color: orange;
        border-width: 3px;
        margin-left: 2%;
        margin-right: 2%;
      }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
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
      <div class="container" style="margin-top: 50px">
        <center><h3>User Registration</h3></center>
         <?php
      if (isset($_GET['error'])) {
      echo $_GET['error'];
    }
    ?>
     <?php
      if (isset($_GET['error1'])) {
      echo $_GET['error1'];
    }
    ?>
     <?php
      if (isset($_GET['error2'])) {
      echo $_GET['error2'];
    }
    ?>
        <form action="process.php" method="post" enctype="multipart/form-data">
          <label>Name:</label><br />
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Name Of The Person</span>
            </div>
            <input
              type="text"
              class="form-control"
              placeholder="First Name"
              name="first_name"
              required="required"
            />
            <input
              type="text"
              class="form-control"
              placeholder="Middle Name"
              name="middle_name"
              required="required"
            />
            <input
              type="text"
              class="form-control"
              placeholder="Last Name"
              name="last_name"
              required="required"
            />
          </div>
          <div class="form-group">
            <label for="gender">Gender:</label>&nbsp
            <div class="custom-control custom-radio custom-control-inline">
              <input
                type="radio"
                class="custom-control-input"
                id="male"
                value="male"
                name="gender"
                checked="checked"
              />
              <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input
                type="radio"
                class="custom-control-input"
                id="female"
                value="female"
                name="gender"
              />
              <label class="custom-control-label" for="female">Female</label>
            </div>
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input
              type="Email"
              class="form-control"
              id="Email"
              placeholder="Email"
              name="email"
            />
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input
              type="Password"
              class="form-control"
              id="password"
              placeholder="Password"
              name="password"
            />
          </div>

          <div class="form-group">
            <label>Confirm Password:</label>
            <input
              type="Password"
              class="form-control"
              id="password1"
              placeholder="Confirm Password"
              name="password1"
            />
          </div>

          <button
            type="submit"
            value="submit"
            name="submit"
            id="submit"
            class="btn btn-primary"
          >
            Submit
          </button>
        </form>
      </div>
    </div>

    
  </body>
</html>
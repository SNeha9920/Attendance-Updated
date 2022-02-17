<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
  header("location: login.php");
}
require '../views.php';
require_once('../config.php');
list($all_subject_result) = SubjectData($connect);
?>
<!-- In progress -->
<!-- Separate Css -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap");
  </style>
  <style>
    body {
      background-image: url("../Resources/bg.png");
      background-repeat: no-repeat;
      background-size: 50%;
      background-position: center;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
    <!-- Back  button -->
    <div style="margin-left: 50px; color: #3399ff">
      <a href="attendance.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
      </a>
    </div>
    <div class="container" style="margin-top: 50px">
      <center>
        <h3 style="margin-bottom: 30px"> Mark Attendance</h3>
      </center>
      <form method="POST" action="">
        <div>

          <div class="container">
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="year"><b>Select Year:</b></label><br />
              <select class="form-control" name="year" required="required">

                <option>SE</option>
                <option>TE</option>
                <option>BE</option>
              </select>
            </div>
          </div>

          <div class="container">
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="semester"><b>Select Semester:</b></label>
              <select class="form-control" name="semester" required="required">

                <option>Semester 3</option>
                <option>Semester 4</option>
                <option>Semester 5</option>
                <option>Semester 6</option>
                <option>Semester 7</option>
                <option>Semester 8</option>

              </select>
            </div>
          </div>
          <div class="container">
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="division"><b>Select Division:</b></label><br />
              <select class="form-control" name="division" required="required">

                <option>A</option>
                <option>B</option>
              </select>
            </div>
          </div>
          <div class="container">
            <div id="sub" class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="subject"><b>Select Subject:</b></label>
              <select class="form-control" name="subject">
                <?php
                while ($row = mysqli_fetch_array($all_subject_result)) {
                  echo '
                <option value="' . ($row['subject_id']) . '">' . ($row['name']) . '</option>';
                }
                ?>
              </select>
            </div>
          </div>

          <div class="container">
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="date"><b>Select Date:</b></label><br />
              <input type="month" onload="getDate()" class="form-control" id="month" name="month" value="<?php echo date("Y-m") ?>" min="<?php echo date('Y-m', strtotime("this week")) ?>" max="<?php echo date("Y-m") ?>">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="form-group" style="width: 45%; float: left; margin-right: 70px">
            <label for="lectures_taken"><b>Lectures Taken:</b></label><br />
            <input type="number" name="lectures_taken" min="0" max="50" required=required>
          </div>
        </div>
        <div>
          <div class="form-group" style="width: 100%; float: left">
            <button type="submit" value="create" id="create" name="create" class="btn btn-primary">Create
            </button>
          </div>
        </div>
    </div>
    </form>
  </div>
    <center>
    <table style='margin-left: 60px; margin-right: 70px; width: 93%'>
  <tr>
    <th>Student Id</th>
    <th>Roll Number</th>
    <th>Division</th>
    <th>Batch</th>
    <th>Name of student</th>
    <th>No. of day Present in this month</th>
    
  </tr>
<?php
    while ($row = mysqli_fetch_array($display_rolllist_result)) {
  ?>
      <form action="../urls.php" method="POST">
        <tr>
          <td><?php echo $row['student_id'] ?></td>
          <td><?php echo $row['roll_no'] ?></td>
          <td><?php echo $row['division'] ?></td>
          <th><?php echo $row['batch'] ?></th>
          <th><?php echo $row['name'] ?></th>
          <input type="hidden" name="student_id[]" value="<?php echo $row['student_id'] ?>">
          <input type="hidden" name="subject" value="<?php echo $subject ?>">
          <input type="hidden" name="month" value="<?php echo $month ?>">
          <input type="hidden" name="lectures_taken" value="<?php echo $lectures_taken ?>">

          <td><input type="number" name="days[]" id="days" class="form-control form-control-alternative" min="0" max="<?php echo $lectures_taken ?>" /></td>
        </tr>
    <?php
    }
    ?>
  </table></center>
  <button type="submit" value="create_attendance" id="create_attendance" name="create_attendance" class="btn btn-success" style="align-right">Save</button></form>


    </table>
    </center>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['userlogin']) && (array_values($_SESSION['userlogin']))['5']!='hodcomp@dmce.ac.in') {
  header("location: login.php");
  // hodcomp@dmce.ac.in
}
require '../views.php';
require_once('../config.php');
list($all_user_result, $theory_subject_result, $practical_subject_result, $assigned_faculties_result, $approved_faculties_result) = FacultyData($connect);
?>
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
  <script src="table2excel.js" ></script>
<!-- <script src="html2pdf.bundle.min.js" ></script> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
 
  <title>DMCE . Amendment Portal</title>
  <link rel="icon" href="../Resources/dmce_logo.jpeg" type="image/x-icon">
</head>
  <body>
    <!-- Navbar -->
    <nav class="navbar"></nav>
    <div>
      <img src="../Resources/logo_blue.png" class="nav-image img-fluid" alt="DMCE" />
    </div>
    <hr />
    <!-- Navbar -->
    <!-- Back  button -->
  <div style="margin-left: 50px; color: #3399ff">
    <a href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
      </svg>
    </a>
  </div>





<div class="container">
  <table>
    <tr>
      <th>Teacher Name</th>
      <th>Incharge</th>
      <th>Subject Name</th>
      <th>Academic Year</th>
      <th>Scheme</th>
      <th>Year</th>
      <th>Semester</th>
      <th>Division</th>
      <th>Batch</th>
    </tr>
    <form method="POST" action="../urls.php">
    <?php
        while($row = mysqli_fetch_array($approved_faculties_result)){
          ?>
          <tr>
            <td> <?php echo  $row['first_name'] . ' ' . $row['last_name']; ?></td>
            <td><?php echo  $row['incharge']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['academic_year']; ?></td>
            <td><?php echo $row['scheme']; ?></td>
            <td><input style="border: none; color: black; width: 30px" type="text" disabled  value="<?php echo $row['year']; ?>"></td>
            <td><?php echo  $row['semester']; ?></td>
            <td><?php echo  $row['division']; ?></td>
            <td><input style="border: none; color: black; width: 30px" type="text" disabled  value="<?php echo $row['batch']; ?>"></td>
            <input type="hidden" name="faculty_list[]" value="<?php echo  $row['id']; ?>">



          </tr>
        <?php
        }
        ?>
      </table>
    </div>
    <script>
      document.getElementById('downloadExcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("table"));
      });
    </script>


    <script type="text/javascript">
      $("body").on("click", "#downloadPdf", function() {
        html2canvas($('#table')[0], {
          onrendered: function(canvas) {
            var data = canvas.toDataURL();
            var docDefinition = {
              content: [{
                image: data,
                width: 500
              }]
            };
            pdfMake.createPdf(docDefinition).download("faculty.pdf");
          }
        });
      });
    </script>



    <div class="container">
          <div class="form-group" style="width: 100%; margin-top: 30px; float: left">
            <button
              type="submit"
              value="submit"
              id="approve_faculty"
              name="approve_faculty"
              class="btn btn-primary"
            >
              Approve
            </button>

            <button
              type="submit"
              value="submit"
              id="reject_faculty"
              name="reject_faculty"
              class="btn btn-danger"
            >
              Reject
            </button>
          </div>
        </div>
</form>

</body>

</html>
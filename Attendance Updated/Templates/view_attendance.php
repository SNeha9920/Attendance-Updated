<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

if (!isset($_SESSION['userlogin'])) {
  header("location: login.php");
}
?>
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
  <script src="table2excel.js"></script>
  <!-- <script src="html2pdf.bundle.min.js" ></script> -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/style.css">
  <title>DMCE . Attendance Portal</title>
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
        <h3 style="margin-bottom: 30px"> View Attendance</h3>
      </center>
      <form method="post" action="../urls.php">
        <div>

          <div class="container">
            <div
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
            >
              <label for="academic_year"><b>Select Academic Year:</b></label>
              <select
                class="form-control"
                name="academic_year"
                required="required"
              >
                <option>2021-22</option>
                <option>2022-23</option>
                <option>2023-24</option>
                <option>2024-25</option>
                <option>2025-26</option>
                
              </select>
            </div>
          </div>



          <div class="container">
            <div
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
            >
              <label for="scheme"><b>Select Scheme:</b></label
              ><br />
              <select
                class="form-control"
                name="scheme"
                required="required"
              >
                <option>R-16</option>
                <option>R-19</option>
              </select>
            </div>
          </div>

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
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="date"><b>Select Date:</b></label><br />
              <input type="month" onload="getDate()" class="form-control" id="month" name="month" value="<?php echo date("Y-m") ?>">
            </div>
          </div>

        </div>

        <div>
          <div class="form-group" style="width: 100%; float: left">
            <button type="submit" value="submit" id="view_attendance" name="view_attendance" class="btn btn-primary">Display
            </button>
          </div>
        </div>
    </div>
    </form>
  </div>
  <div class="form-group" style="width: 50%; margin-left:200px; float: left">
    <button id="downloadExcel" class="btn btn-primary">
      Export As Excel File
    </button>
  </div>
  </div>
  <div>
    <div class="form-group" style="width: 50%; margin-left:200px; float: left">
      <button id="downloadPdf" class="btn btn-primary">
        Export As PDF File
      </button>
    </div>
  </div>








  
  <div>
    <center>
        <table style='margin: 20px 0px 20px 0px; width: 90%'>
        <tr>
            <th rowspan="3">Student ID</th>
            <th rowspan="3">Roll No.</th>
            <th rowspan="2">Name of students</th>
            <?php
              for ($i=0; $i < count($r) ; $i++) { 
                ?>
                <th>
                  <?php 
                  for ($j=0; $j < count(explode(" ",$r[$i]['name'])) ; $j++) { 
                echo (explode(" ",$r[$i]['name']))[$j][0]; 
              }
                ?>
                </th>
                <?php
              }
            ?>
            <th rowspan="2">Grand Total</th>
            <th rowspan="2">% Attd</th>
            <th rowspan="3">Send Mail</th>
        </tr>
        
        <tr>
            <?php
              for ($i=0; $i < count($r) ; $i++) { 
                ?>
                <td>
                  <?php 
                  $temp = explode(" ",$r[$i]['name']);
                  if (end($temp) == 'Lab') {
                    echo "PR";
                  } else {
                    echo "TH";
                  }
                  
                ?>
                </td>
                <?php
              }
            ?>
        </tr>



        <tr>
            <td>Total no of Lectures/Practicals</td>
            <?php
              for ($i=0; $i < count($r) ; $i++) { 
                ?>
                <td>
                  <?php 
                  $temp = json_decode($r[$i]['lectures_taken'], true);
                  error_reporting(0);
                  if ($temp['days'][$month] == null) {
                    echo 0;
                  } else {
                    echo $temp['days'][$month];
                  }

                ?>
                </td>
                <?php
              }
            ?>
            <td></td>
            <td></td>
        </tr>


        <?php
        $k = 0;
              for ($i=0; $i < count($o); $i++) {
                if (fmod($i, count($o)/count($r)) == 0) {
                ?>
        <tr>
            <td><?php echo $o[$i]['student_id'] ?></td>
            <td><?php echo $o[$i]['roll_no'] ?></td>
            <td><?php echo $o[$i][2] ?></td>
            <?php
              for ($j=0; $j < count($r) ; $j++) {
                ?>
                <td>
                  <?php 
                  $temp = json_decode($o[$k]['attendance'], true);
                  error_reporting(0);
                  if ($temp['days'][$month] == null) {
                    echo 0;
                  } else {
                    echo $temp['days'][$month];
                  }

                ?>

                </td>
                <?php
                $k = $k + 1;
              }
            ?>
            <td></td>
            <td></td>
            <td>
                  <button type="submit" value="submit" id="student_mail" name="student_mail" class="btn btn-success">Student
                  </button> <br><br>
                  <button type="submit" value="submit" id="parents_mail" name="parents_mail" class="btn btn-danger">Parent
                  </button>
                  <input type="hidden" name="student_mail" value="<?php echo $o[$i]['student_email'] ?>">
                  <input type="hidden" name="parent_email" value="<?php echo $o[$i]['parent_email'] ?>">
                </td>
        </tr>
      <?php 
  }
}
      ?>
       
    </table>
      </center>



    <script>
    document.getElementById('downloadExcel').addEventListener('click', function() {
      var table2excel = new Table2Excel();
      table2excel.export(document.querySelectorAll("table"));
    });
  </script>
    
<script type="text/javascript">
        $("body").on("click", "#downloadPdf", function () {
            html2canvas($('#table')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Attendance.pdf");
                }
            });
        });
    </script>
</body>
<?php

require_once('db.php');
if (isset($_POST['student_mail'])) {
  require("vendor/autoload.php");
  $var = $_POST['student_email'];

  $mail = new PHPMailer();
  $mail->IsSMTP();
  // $mail->SMTPDebug= 3;
  $mail->Host = "smtp.gmail.com"; // Enter your host here
  $mail->SMTPAuth = true;
  $mail->Username = "js1910492@gmail.com"; // Enter your email here
  $mail->Password = "johnsmith@123"; //Enter your passwrod here
  $mail->Port = 587;
  $mail->IsHTML(true);
  $mail->From = "js1910492@gmail.com";
  $mail->FromName = "DMCE . Ammendment Portal";
  $subject = "subj";
  $body = "body";
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AddAddress($var);

  if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
  // header("location: view_attendance.php");
}

?>

<?php

require_once('db.php');
if (isset($_POST['parent_email'])) {
  require("vendor/autoload.php");
  $var = $_POST['parent_email'];

  $mail = new PHPMailer();
  $mail->IsSMTP();
  // $mail->SMTPDebug= 3;
  $mail->Host = "smtp.gmail.com"; // Enter your host here
  $mail->SMTPAuth = true;
  $mail->Username = "js1910492@gmail.com"; // Enter your email here
  $mail->Password = "johnsmith@123"; //Enter your passwrod here
  $mail->Port = 587;
  $mail->IsHTML(true);
  $mail->From = "js1910492@gmail.com";
  $mail->FromName = "DMCE . Ammendment Portal";
  $subject = "subj";
  $body = "body";
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AddAddress($var);

  if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
  // header("location: view_attendance.php");
}

?>



</html>
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
      background-image: url("resources/bg.png");
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
  <link rel="stylesheet" href="style.css">
  <title>DMCE . Amendment Portal</title>
  <link rel="icon" href="resources/dmce_logo.jpeg" type="image/x-icon">
</head>

<body>
  <div class="option">
    <!-- Navbar -->
    <nav class="navbar"></nav>
    <div>
      <img src="resources/logo_blue.png" class="nav-image img-fluid" alt="DMCE" />
    </div>
    <hr />
    <!-- Navbar -->
    <div class="container" style="margin-top: 50px">
      <center>
        <h3 style="margin-bottom: 30px"> View Term Work</h3>
      </center>
      <form method="POST" action= "#" >
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
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="subject"><b>Select Subject:</b></label><br />
              <select class="form-control" name="subject" required="required">

              <option value="" selected hidden disabled>Select Subject</option>  
                <?php
              require_once('config.php');  
              $query = "SELECT * FROM subject";  
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
              echo'
                <option value="'.($row['subject_id']).'">'.($row['name']).'</option>';
              }
              ?>
              </select>
            </div>
          </div>

        </div>

        <div>
          <div class="form-group" style="width: 100%; float: left">
            <button type="submit" value="submit" id="term-work" name="term-work" class="btn btn-primary">Display
            </button>
            
          </div>
        </div>
    </div>
    </form>
  </div>
  
      </thead>
     
      <tbody>

      
 <?php
    if (isset($_POST['term-work'])){
      echo'
      <center>
  
    <table style="margin: 20px 0px 20px 0px;">
      <thead>
        <tr>
          <th>Student Id</th>
          <th>Roll no</th>
          <th>Name of students</th>
          <th>Attendance</th>
          <th colspan="2">Assignments</th>
          <th colspan="5">Experiments</th>
          <th>Total</th>
          <th>Email</th>
          <th>Send Email</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>Grade</th>
          <th>Marks</th>
          <th>Presentation (out of 5)</th>
          <th>Grade on exp(out of 5)</th>
          <th>Overall perform-ance (out of 5)</th>
          <th>Grade on Journal </th>
          <th>Total(out of 15)</th>
          <th></th>
          <th></th>
          <th></th>

        </tr> ';
      
      $year = $_POST['year'];
      $division = $_POST['division'];
      $semester = $_POST['semester'];
      $subject = $_POST['subject'];
      // echo $subject.$year.$semester.$division;
      
    
    require_once('config.php');
        $query = "SELECT attendance.*, student.*, subject.*, student.name as student_name FROM attendance LEFT JOIN student ON attendance.student_id= student.student_id LEFT JOIN subject ON attendance.subject_id = subject.subject_id WHERE student.year='$year' AND student.semester='$semester' AND student.division='$division' AND subject.subject_id='$subject'";  
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)){
          ?>
           <form method="POST" action= "#" >
    <tr>
    <td><?php echo $row['student_id'] ?></td>
        <td><?php echo $row['roll_no']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <input type="hidden" name="student_id[]" value="<?php echo $row['student_id'] ?>">
        <input type="hidden" name="subject" value="<?php echo $subject ?>">
      <td><?php 
      $days = json_decode($row['attendance'], true);
      $percentage = (($days['days'][0]/$row['lectures_taken'])*100);
      // echo $percentage;
      $attendancemarks = null;
      if ($percentage>75) {
        $attendancemarks=5;
      } elseif (74>=$percentage && $percentage>=64) {
        $attendancemarks=4;
      } elseif (63>=$percentage && $percentage>=54) {
        $attendancemarks=3;
      } elseif (53>=$percentage && $percentage>=45) {
        $attendancemarks=2;
        }
        else{
        $attendancemarks=0;
      }
      echo $attendancemarks;
      
       ?></td>
      <td> <select id="selector" onchange="yesnoCheck(this);" name="grade">
      <option disabled selected>Select Grade</option>
      <option value="5">A+</option>
      <option value="4">A</option>
      <option value="3">A-</option>
      <option value="2">B+</option>
      </select> </td>
      <td id="marks">
      <script type="text/javascript">
              var x;
              let y=0;
              function yesnoCheck(that) {
                if (that.value == "5") {
                  var y = 5;
                  x = document.getElementById("marks").innerHTML = `${y}`;
                } 
                else if (that.value == "4") {
                  var y = 4;
                  x = document.getElementById("marks").innerHTML = `${y}`;
                }
                  else if (that.value == "3") {
                  var y = 3;
                  x = document.getElementById("marks").innerHTML = `${y}`;
                } else if (that.value == "2") {
                  var y = 2;
                  x = document.getElementById("marks").innerHTML = `${y}`;

                }
                return y;
              }
            </script>
      </td>
      <td><input type="number"  required name="presentationexp" id="presentationexp" oninput="addit()" maxlength="1" min="0" max="5" size="1"></td>
      <td><input type="number" required name="gradeexp" id="gradeexp" oninput="addit()" maxlength="1" min="0" max="5" size="1"></td>
      <td><input type="number" required name="overallexp" id="overallexp" oninput="addit()" maxlength="1" min="0" max="5" size="1"></td>
          
      <script type="text/javascript">
            var a = document.getElementById("presentationexp");
            var b = document.getElementById("gradeexp");
            var c = document.getElementById("overallexp");
            let result=0;

            function addit() {
              var first_number = parseFloat(a.value);
              if (isNaN(first_number)) first_number = 0;
              var second_number = parseFloat(b.value);
              if (isNaN(second_number)) second_number = 0;
              var third_number = parseFloat(c.value);
              if (isNaN(third_number)) third_number = 0;
              var result = first_number + second_number + third_number;
              document.getElementById("total").innerHTML = result;
              let grade;
              switch(result)
              {
                case 15:
                  grade= "A++";
                  break;
                case 14:
                  grade="A+";
                  break;
                case 13:
                  grade="A";
                  break;
                case 12:
                  grade="A-";
                  break;
                case 11:
                  grade="B+";
                  break;
                case 10:
                  grade="B";
                  break;
                case 9:
                  grade="B-";
                  break;
                case 8:
                  grade="C+";
                  break;
                case 7:
                  grade="C";
                  break;
                case 6:
                  grade="C-";
                  break;
                default:
                  grade="F";
                  break;


              }
              document.getElementById("journal").innerHTML = grade;

              return result;
            }

          </script>
          <td id="journal"> <script type="text/javascript">
              var x;

              
                }
              }
            </script></td>
          <td id="total"></td>
          <td id= "term">
            <script type="text/javascript">
              // function addall(result, y) {
            var attend= <?php echo $attendancemarks; ?>;
            var grandtotal = result+attend+y;
            document.getElementById("term").innerHTML = grandtotal;
          //   return grandtotal;
          // }
          </script>
        </td> 
      
      <td></td>
      <td><button type="submit" value="submit" id="student_mail" name="student_mail" class="btn btn-success">Student
      </button></td>
    </tr>

      </tbody>
    </table>
    <?php
        }
    echo '
    <button type="submit" value="submit" id="assign" name="assign" class="btn btn-success">Save
    </button> ';
      }
         

    if(isset($_POST['assign'])) {
      $student_id=$_POST['student_id'];
      $subject=$_POST['subject'];
      $attendance=$_POST['attendance'];
      $grade=(int)$_POST['grade'];
      
      $presentationexp=$_POST['presentationexp'];
      $gradeexp=$_POST['gradeexp'];
      $overallexp=$_POST['overallexp'];

    //  echo $gradeexp;
    for ($i=0; $i < count($student_id) ; $i++) {
      
      $execute = mysqli_query($connect, "INSERT INTO term_work (student_id, subject_id,attendance, assignment, presentation, exp_grade, overall) VALUES ('$student_id[$i]', '$subject', '$attendance', '$grade', '$presentationexp', '$gradeexp', '$overallexp')");
      
    }
      
     
  }
  ?>
</html>
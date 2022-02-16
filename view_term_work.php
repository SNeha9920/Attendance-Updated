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

              <option value="" hidden disabled  selected>Select Subject</option>  
                <?php
              require_once('../config.php');  
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
            <div class="form-group" style="width: 35%; float: left; margin-right: 70px">
              <label for="scheme"><b>Select Syllabus:</b></label><br />
              <select class="form-control" name="scheme" required="required">
              <option value="" hidden disabled selected >Select Scheme</option>
                <option>R-16</option>
                <option>R-19</option>
              </select>
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
  
      
      
 <?php
    if (isset($_POST['term-work'])){
      echo'
      <center>
  
    <table style="margin: 20px 0px 20px 0px;">
      
        <tr>
          <th>Student Id</th>
          <th>Roll no</th>
          <th>Name of students</th>
          <th colspan="5">Attendance</th>
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
          <th>M1</th>
          <th>M2</th>
          <th>M3</th>
          <th>M4</th>
          <th>Marks</th>
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
        </tr> ' ;

        
      $year = $_POST['year'];
      $division = $_POST['division'];
      $semester = $_POST['semester'];
      $subject = $_POST['subject'];
      // echo $subject.$year.$semester.$division;
      
    
    require_once('../config.php');
        $query = "SELECT attendance.*, student.*, subject.*, position.* , student.name as student_name FROM attendance RIGHT JOIN student ON attendance.student_id= student.student_id LEFT JOIN subject ON attendance.subject_id = subject.subject_id LEFT JOIN position ON attendance.subject_id = position.subject_id WHERE student.year='$year' AND student.semester='$semester' AND student.division='$division' AND subject.subject_id='$subject' AND position.subject_id='$subject'";  
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result)){
          $arr = json_decode($row['attendance'],true);
          $lectures_taken = json_decode($row['lectures_taken'],true);
        // print_r ($lectures_taken);
          ?>
           <form method="POST" action= "#" >
    <tr>
    <td><?php echo $row['student_id'] ?></td>
        <td><?php echo $row['roll_no']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <input type="hidden" name="student_id[]" value="<?php echo $row['student_id'] ?>">
        <input type="hidden" name="subject" value="<?php echo $subject ?>">
        <?php
       $att=0; 

        foreach ($arr["days"] as $x=>$value)
        {
          echo "<td> ".(int) $value. "</td>";
  
          $att=$att+$value;
          
        }
        $t=0;
        foreach ($lectures_taken["days"] as $x=>$value)
        {
    
          $t=$t+$value;
         
        }
        ?>
        <td><?php 
      // $days = json_decode($row['attendance'], true);
      $percentage = (($att/$t)*100);
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
      
       ?>
         
       </td>
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
              let y;
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
            
            var result = 0;
            var a = document.getElementById("presentationexp");
            var b = document.getElementById("gradeexp");
            var c = document.getElementById("overallexp");
           
            function addit() {
              var first_number = parseFloat(a.value);
              if (isNaN(first_number)) first_number = 0;
              var second_number = parseFloat(b.value);
              if (isNaN(second_number)) second_number = 0;
              var third_number = parseFloat(c.value);
              if (isNaN(third_number)) third_number = 0;
              result = first_number + second_number + third_number;
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
          <td id="journal"> </td>
          <td id="total"></td>
          
            <script type="text/javascript">
              // function addall(result, y) {
            var attend= Number(<?php echo $attendancemarks; ?>);
             // console.log(attend);
             // console.log(result);
             // console.log(y);
             i=addit();
             //j=yesnoCheck()
             console.log(attend);
             console.log(i);
             console.log(y);

            var grandtotal = result+attend+y;
            console.log(grandtotal);
            //document.getElementById("term").innerHTML = grandtotal;
          //   return grandtotal;
          // }
          </script>
        <td id= "term"> </td> 
      
      <td><?php echo $row['student_email'] ?></td>
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
      
      $execute = mysqli_query($connect, "INSERT INTO term_work (student_id, subject_id,attendancemarks, assignment, presentation, exp_grade, overall) VALUES ('$student_id[$i]', '$subject', '$attendance', '$grade', '$presentationexp', '$gradeexp', '$overallexp') ON DUPLICATE KEY UPDATE attendancemarks='$attendance', assignment='$attendance',presentation='$attendance',exp_grade='$attendance',overall='$overallexp'");
      
    }
      
     
  }
  
// if (isset($_POST['term-work'])){
//       $year = $_POST['year'];
//       $division = $_POST['division'];
//       $semester = $_POST['semester'];
//       $subject = $_POST['subject'];
//       echo $subject.$year.$semester.$division;
//     }
//  ?> 


</html>
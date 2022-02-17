<?php
session_start();
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
    <a href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
      </svg>
    </a>
  </div>

      
    <div class="container" style="margin-top: 50px">
      <center>
      <h3 style="margin-bottom: 30px">Roll List</h3>
      </center>
      <form method="POST" action="../urls.php">
        <div>

          <div class="container">
            <div
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
            >
              <label for="year"><b>Select Year:</b></label
              ><br />
              <select
                class="form-control"
                name="year"
                required="required"
              >
               
                <option>SE</option>
                <option>TE</option>
                <option>BE</option>
              </select>
            </div>
          </div>

          <div class="container">
            <div
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
            >
              <label for="semester"><b>Select Semester:</b></label>
              <select
                class="form-control"
                name="semester"
                required="required"
              >
               
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
            <div
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
            >
              <label for="division"><b>Select Division:</b></label
              ><br />
              <select class="form-control" name="division" required="required">
                
                <option>A</option>
                <option>B</option>
              </select>
            </div>
          </div>
        </div>

        <div>
          <div class="form-group" style="width: 100%; float: left">
            <button
              type="submit"
              value="submit"
              id="display"
              name="display"
              class="btn btn-primary"
            >Display
            </button>
            
          </div>
        </div>
        </div>
      </form>

<form method="POST" action="../urls.php">
            <div class="container">
              <div 
              class="form-group"
              style="width: 35%; float: left; margin-right: 70px"
              >

              <label for="Add Students"> <b>Add student: </b></label> 
              
                <input type="number" value="No_of_students" id="number" name="No_of_students" min="0">
              
              <button
              type="submit"
              value="submit"
              id="add"
              name="add"
              class="btn btn-primary" style="margin-left: 20px"
            >Add
            </button>
            </div>
          </div>
            </form>


    </div>


    <!-- <form method="POST" action="#">
            <div class="container">
              <div 
              class="form-group"
              style="width: 50%; float: left; margin-right: 80px"
              >

              <label for="Filter By Students Name"> <b>Filter By Students Name </b></label> 
              
                <input type="text" value="" id="text" name="Filter By Students Name">
              
              <button
              type="submit"
              value="submit"
              id="search"
              name="search"
              class="btn btn-primary" style="margin-left: 20px"
            >Search
            </button>
            </div>
            </form> -->

    <div class="form-group" style="width: 100%; margin-left: 200px; float: left">
            <button id="downloadExcel" class="btn btn-primary">
              Export As Excel File
            </button>
          </div>
        </div>
          <div>
          <div class="form-group" style="width: 100%; margin-left: 200px; float: left">
            <button id="downloadPdf" class="btn btn-primary">
            Export As PDF File
            </button>
          </div>
        </div>
        <div>
    </div>
    











<div id='dvContainer'>
     <center>
      <table style='margin: 20px 0px 20px 0px; width: 90%'>
        <tr>
          <th></th>
          <th>Student Id</th>
          <th>Roll No.</th>
          <th>Name Of Students</th>
          <th>Year</th>
          <th>Semester</th>
          <th>Division</th>
          <th>Batch</th>
          <th>DLOC</th>
          <th>ILOC</th>
          <th>Students Email-id</th>
          <th>Parents Email-id</th>
          <th>Mobile No.</th>
          <th>Actions</th>
        </tr>
        <?php
        require_once('../urls.php');
        print_r($display_rolllist_result);
    while($row = mysqli_fetch_array($display_rolllist_result)){
?>
          <form action="action.php" method="POST">
        <tr>
        <td><input type="checkbox"></td>
        <td><input type="text" name="student_id" id="student_id" class="form-control form-control-alternative" placeholder="student_id" value="<?php echo $row['student_id'] ?>"/></td>
        <td><input type="text" name="roll_no" id="roll_no" class="form-control form-control-alternative" placeholder="Roll No" value="<?php echo $row['roll_no'] ?>"/></td>
        <td><input type="text" name="full_name" id="full_name" class="form-control form-control-alternative" placeholder="Full Name" value="<?php echo $row['name'] ?>"/></td>
        <td><input type="text" name="year" id="year" class="form-control form-control-alternative" placeholder="Year" value="<?php echo $year ?>"/></td>
        <td><input type="text" name="semester" id="semester" class="form-control form-control-alternative" placeholder="Semester" value="<?php echo $semester ?>"/></td>
        <td><input type="text" name="div" id="div" class="form-control form-control-alternative" placeholder="Division" value="<?php echo $div ?>"/></td>
        <td><input type="text" name="batch" id="batch" class="form-control form-control-alternative" placeholder="Batch" value="<?php echo $row['batch'] ?>"/></td>
        <td><input type="text" name="dloc" id="dloc" class="form-control form-control-alternative" placeholder="" value="<?php echo $row['DLOC'] ?>"/></td>
        <td><input type="text" name="iloc" id="iloc" class="form-control form-control-alternative" placeholder="" value="<?php echo $row['ILOC'] ?>"/></td>
        <td><input type="text" name="student_email" id="student_email" class="form-control form-control-alternative" placeholder="Student Email" value="<?php echo $row['student_email'] ?>"/></td>
        <td><input type="text" name="parent_email" id="parent_email" class="form-control form-control-alternative" placeholder="Parent Email" value="<?php echo $row['parent_email'] ?>"/></td>
        <td><input type="text" name="mobile_no" id="mobile_no" class="form-control form-control-alternative" placeholder="Mobile Number" value="<?php echo $row['mobile_no'] ?>"/></td>
        <td style="width: 165px">
      </div>
          <div>
          <button
              type="submit"
              value="submit"
              id="save"
              name="save"
              class="btn btn-success" style="align-right"
            >Save
            </button>
            <button
              type="submit"
              value="submit"
              id="delete"
              name="delete"
              class="btn btn-danger" style="align-right"
            >Delete
            </button>
            </div>
          </td>
        </tr>
      </form>
<?php
}
?>        
     





<?php
$x=0;
while($x < $Add_no_of_students){
  ?>
  <form action="../urls.php" method="POST">
        <tr>
        <td><input type="text" name="student_id[]" id="student_id" class="form-control form-control-alternative" placeholder="student_id"/></td>
        <td><input type="text" name="roll_no[]" id="roll_no" class="form-control form-control-alternative" placeholder="Roll No"/></td>
        <td><input type="text" name="full_name[]" id="full_name" class="form-control form-control-alternative" placeholder="Full Name"/></td>
        <td><input type="text" name="year[]" id="year" class="form-control form-control-alternative" placeholder="Year"/></td>
        <td><input type="text" name="semester[]" id="semester" class="form-control form-control-alternative" placeholder="Semester"/></td>
        <td><input type="text" name="div[]" id="div" class="form-control form-control-alternative" placeholder="Division"/></td>
        <td><input type="text" name="batch[]" id="batch" class="form-control form-control-alternative" placeholder="Batch"/></td>
        <td><input type="text" name="dloc[]" id="dloc" class="form-control form-control-alternative" placeholder=""/></td>
        <td><input type="text" name="iloc[]" id="iloc" class="form-control form-control-alternative" placeholder=""/></td>
        <td><input type="text" name="student_email[]" id="student_email" class="form-control form-control-alternative" placeholder="Student Email"/></td>
        <td><input type="text" name="parent_email[]" id="parent_email" class="form-control form-control-alternative" placeholder="Parent Email"/></td>
        <td><input type="text" name="mobile_no[]" id="mobile_no" class="form-control form-control-alternative" placeholder="Mobile Number"/></td>
        </tr> 
        <?php
  $x++;}
  ?>
  </table></center>
  <button type="submit" value="save_all" id="save_all" name="save_all" class="btn btn-success" style="align-right" >Save All</button></form>



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
                    pdfMake.createPdf(docDefinition).download("faculty.pdf");
                }
            });
        });
    </script>

</body>
</html>
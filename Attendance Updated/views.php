<?php
require_once('config.php');


function FacultyData($connect){
  $all_user = "SELECT * FROM user";  
  $all_user_result = mysqli_query($connect, $all_user);

  $theory_subject = "SELECT * FROM subject";  
  $theory_subject_result = mysqli_query($connect, $theory_subject);

  $practical_subject = "SELECT * FROM subject";  
  $practical_subject_result = mysqli_query($connect, $practical_subject);

  $assigned_faculties = "SELECT position.*, subject.*, user.* FROM position LEFT JOIN user ON position.teacher_id= user.teacher_id LEFT JOIN subject ON position.subject_id = subject.subject_id";  
  $assigned_faculties_result = mysqli_query($connect, $assigned_faculties);

  return array($all_user_result, $theory_subject_result, $practical_subject_result, $assigned_faculties_result);
}

function AddFaculty($connect, $faculty,$incharge, $academic_year, $scheme,$year,$semester, $division, $batch, $subject) {
    $add_faculty = "INSERT INTO position (teacher_id, subject_id, incharge, academic_year, scheme, year, semester, division, batch) VALUES ('$faculty','$subject', '$incharge','$academic_year','$scheme','$year','$semester', '$division', '$batch')"; 
  $add_faculty_result = mysqli_query($connect, $add_faculty);
  print_r($connect);
    }


function DisplayStudentRollList($connect, $year, $semester, $div){
    $display_rolllist = "SELECT * FROM student WHERE year='$year' AND semester='$semester' AND division='$div'";  
    $display_rolllist_result = mysqli_query($connect, $display_rolllist);
    return array($display_rolllist_result, $year, $semester, $div);
}


function AddStudentRollList(){
  for ($i=0; $i <count($Student_Id) ; $i++) { 
  $add_student = "INSERT INTO student (student_id,roll_no,name,year,semester,division,batch,DLOC,ILOC,student_email,parent_email,mobile_no) VALUES ('$Student_Id[$i]','$Roll_No[$i]','$Name[$i]','$year[$i]','$semester[$i]','$division[$i]','$Batch[$i]','$DLOC[$i]','$ILOC[$i]','$Students_Email_id[$i]','$Parents_Email_id[$i]','$Mobile_no[$i]')";  
  $add_student_result = mysqli_query($connect, $add_student);
}}

function DelStudentRollList(){
    $del_student = "DELETE FROM student WHERE student_id='$student_id'";  
    $del_student_result = mysqli_query($connect, $del_student);
}

function SaveStudentRollList($Student_Id,$Roll_No,$Name,$year,$semester,$division,$Batch,$DLOC,$ILOC,$Students_Email_id,$Parents_Email_id,$Mobile_no){
    $save_student = "UPDATE student SET roll_no='$Roll_No',name='$Name',year='$year',semester='$semester',division='$division',batch='$Batch',DLOC='$DLOC',ILOC='$ILOC',student_email='$Students_Email_id',parent_email='$Parents_Email_id',mobile_no='$Mobile_no' WHERE student_id = '$Student_Id'";  
    $save_student_result = mysqli_query($connect, $query);
    print_r($connect);
}

function ViewAttendance($connect, $academic_year, $scheme, $year, $semester, $division, $month){
  $position_array = array();
          $position_view_attendance = "SELECT position.*, subject.* FROM position RIGHT JOIN subject ON subject.subject_id=position.subject_id WHERE position.academic_year='$academic_year' AND position.scheme='$scheme' AND position.year='$year' AND position.semester='$semester' AND position.division='$division'";
          $position_view_attendance_result = mysqli_query($connect, $position_view_attendance);
          while ($row = mysqli_fetch_array($position_view_attendance_result)) {
          array_push($position_array,$row);
        }
  $student_array = array();
          $student_view_attendance = "SELECT student.*, attendance.*, subject.* FROM student RIGHT JOIN attendance ON attendance.student_id=student.student_id RIGHT JOIN subject ON subject.subject_id=attendance.subject_id WHERE student.academic_year='$academic_year' AND student.scheme='$scheme' AND student.year='$year' AND student.semester='$semester' AND student.division='$division'";
          $student_view_attendance_result = mysqli_query($connect, $student_view_attendance);
          while ($row1 = mysqli_fetch_array($student_view_attendance_result)) {
          array_push($student_array,$row1);
        }
return array($position_array, $student_array);
}

function SubjectData($connect)
{
  $all_subject = "SELECT * FROM subject";
  $all_subject_result = mysqli_query($connect, $all_subject);
}

function CreateAttendance($connect, $student_id, $subject, $month, $lectures_taken, $days)
{
  $a = mysqli_fetch_array(mysqli_query($connect, "SELECT lectures_taken FROM subject WHERE subject_id='$subject'"));
    $b = json_decode($a[0], true);
    $b["days"][$month] = $lectures_taken;
    $b = json_encode($b);
    $e = mysqli_query($connect, "UPDATE subject SET lectures_taken= '$b' WHERE subject_id='$subject'");
    for ($i = 0; $i < count($student_id); $i++) {
      $exe = mysqli_fetch_array(mysqli_query($connect, "SELECT attendance FROM attendance WHERE student_id='$student_id[$i]' AND subject_id='$subject'"));
      if ($exe == null) {
        $exe[0] =   '{"days":{}}';
      }
      $dump = json_decode($exe[0], true);
      $dump["days"][$month] = $days[$i];
      $dump = json_encode($dump);
      // echo $dump;
      $execute = mysqli_query($connect, "INSERT INTO attendance (student_id, subject_id, attendance) VALUES ('$student_id[$i]', $subject, '$dump') ON DUPLICATE KEY UPDATE attendance='$dump'");
    }
}

views.php
function ProfileDetails($connect, $first_name, $middle_name, $last_name, $email, $gender, $id){
  $profile_details = "UPDATE user SET first_name='$first_name', middle_name = '$middle_name',last_name = '$last_name',gender = '$gender', email = '$email'  WHERE teacher_id = '$id'";
  $profile_details_result = mysqli_query($connect, $profile_details);
}

?>

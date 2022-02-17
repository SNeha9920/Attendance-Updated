<?php
require('views.php');
require_once('config.php');

// faculty.php
if (isset($_POST['submit'])){
	AddFaculty($connect, $_POST['faculty'], $_POST['incharge'], $_POST['academic_year'], $_POST['scheme'], $_POST['year'], $_POST['semester'], $_POST['division'], isset($_POST['batch']) ? $_POST['batch'] : null, isset($_POST['subject']) ? $_POST['subject'] : null);
	// header("location: Templates/faculty.php");
	
}

// roll_list_class_incharge.php
if(isset($_POST['display'])){
	list($display_rolllist_result, $year, $semester, $div) = DisplayStudentRollList($connect, $_POST['year'], $_POST['semester'], $_POST['division']);
	// print_r($display_rolllist_result);
	header("location: Templates/roll_list_class_incharge.php");
}

if(isset($_POST['add'])){
	$Add_no_of_students = $_POST['No_of_students'];
	echo $Add_no_of_students;
	// header("location: Templates/roll_list_class_incharge.php");
}

if (isset($_POST['save'])) {
	SaveStudentRollList($connect, $_POST['student_id'], $_POST['roll_no'], $_POST['full_name'], $_POST['year'], $_POST['semester'], $_POST['div'], $_POST['batch'], $_POST['dloc'], $_POST['iloc'], $_POST['student_email'], $_POST['parent_email'], $_POST['mobile_no']);
	// header("location: Templates/roll_list_class_incharge.php");
}

if (isset($_POST['delete'])) {
	DelStudentRollList($connect, $_POST['student_id']);
	// header("location: Templates/roll_list_class_incharge.php");
}

if (isset($_POST['save_all'])) {
	AddStudentRollList($connect, $_POST['student_id'], $_POST['roll_no'], $_POST['full_name'], $_POST['year'], $_POST['semester'], $_POST['div'], $_POST['batch'], $_POST['dloc'], $_POST['iloc'], $_POST['student_email'], $_POST['parent_email'], $_POST['mobile_no']);
	// header("location: Templates/roll_list_class_incharge.php");
}

// view_attendance.php
if(isset($_POST['view_attendance'])){
	list($position_array, $student_array) = ViewAttendance($connect, $_POST['academic_year'], $_POST['scheme'], $_POST['year'], $_POST['semester'], $_POST['division'], $_POST['month']);
	print_r($position_array);
	print_r($student_array);
	// header("location: Templates/view_attendance.php");
}

// create_attendance.php
if (isset($_POST['create'])) {
	list($display_rolllist_result, $year, $semester, $div) = DisplayStudentRollList($connect, $_POST['year'], $_POST['semester'], $_POST['division']);
	print_r($display_rolllist_result);
}

if (isset($_POST['create_attendance'])) {
	CreateAttendance($connect, $_POST['student_id'], $_POST['subject'], $_POST['month'], $_POST['lectures_taken'], $_POST['days']);
}


if(isset($_POST['edit'])){
echo $_POST['first_name'];
ProfileDetails($connect,$_POST['first_name'],$_POST['middle_name'],$_POST['last_name'],$_POST['email'],$_POST['gender'],$_POST['id']);
header("location: Templates/profile.php");
}
?>

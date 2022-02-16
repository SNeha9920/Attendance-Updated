<?php
require_once('config.php');

if(isset($_POST)){
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $password1 = sha1($_POST['password1']);
    if ($password == $password1) {
    $sql = "INSERT INTO user (first_name,middle_name,last_name,gender,email,password) VALUES(?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$first_name,$middle_name,$last_name,$gender,$email,$password]);
    if($result){
      #echo "sucessfull";
      header("location: login.php");
    }else{
      header('location: register.php?error=Something Error Occured!!');
    }
  }
  else{
 header('location: register.php?error1=Password Not Matching!!');
  }
}
  else{
       header('location: register.php?error2=No Data Found!!');
  }

?>
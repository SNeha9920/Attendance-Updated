<?php
session_start();
require_once('../config.php');
$email = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM user WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);
if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
    	 $_SESSION['userlogin'] = $user;
        header("Location:index.php");
    }else{
        header('location: login.php?error=No User Found That Combo!!');
    }
}else{
    echo "Error";
}
?>
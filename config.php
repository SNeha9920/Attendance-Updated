<?php

date_default_timezone_set('Asia/Kolkata');
$db_user = "Neha";
$db_pass = "1235";
$db_name = "attendance";
$db = new PDO('mysql:host=localhost;dbname=' .$db_name . ';charset-utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$servername = "localhost";
$username = "Neha";
$password = "1235";
$dbname = "attendance";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
?>
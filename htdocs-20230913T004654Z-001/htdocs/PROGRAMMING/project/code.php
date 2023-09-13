<?php
$name = $_POST ["name"];
$pass = $_POST ["pass"];
$phone = $_POST ["phone"];
$email = $_POST ["email"];
$msg = $_POST ["msg"];

if(!empty($name) || !empty($pass) || !empty($phone) || !empty($email) || !empty($msg)){
    $host ="localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "Students";

    $con = new mysqli($host, $dbUsername, $dbpassword, $dbname);

   if($con){
    echo "connected";
   }

}
?> 
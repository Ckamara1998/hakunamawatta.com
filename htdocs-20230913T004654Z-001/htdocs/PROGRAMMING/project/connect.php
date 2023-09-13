


<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'students';

$con = mysqli_connect($host, $usre, $pass, $db);
if($con){
    echo "connect successful";
}
?>
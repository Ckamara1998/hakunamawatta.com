

<?php
$hote = 'localhost';
$pass = '';
$db = 'cooper';
$host = 'root';
$con = mysqli_connect($host, $pass, $user, $db);
if ($con) {
    echo 'connection successful';
}

$sql = "INSERT INTO cooperdata(username, password, email, number, msg)";
$query = mysqli_query($con, $sql);
if ($query)
    echo 'connection successful';
?>

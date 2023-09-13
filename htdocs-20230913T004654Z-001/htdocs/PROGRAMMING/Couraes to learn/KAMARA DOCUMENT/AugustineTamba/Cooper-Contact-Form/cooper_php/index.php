<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>my website</title>
</head>
<body>
<a href="login.php">Logout</a>
<h1>This is the index page</h1>

<br>
hello, username.
</body>
</html>
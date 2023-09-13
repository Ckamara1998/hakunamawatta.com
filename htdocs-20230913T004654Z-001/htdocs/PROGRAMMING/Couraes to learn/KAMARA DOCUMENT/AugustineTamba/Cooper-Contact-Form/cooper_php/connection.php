<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_simple_db";

if(!$con = mysqli_connects($dbhost,$dbuser,$dbpass,$dbname ))
{
    die("failed to connect!");
}
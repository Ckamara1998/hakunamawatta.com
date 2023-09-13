<?php
session_start();

include("connection.php");
include("function.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }
    
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: green;
            margin-left: 100;
            width: 300px;
            padding: 20px;
        }
        .login{
            font-size: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>


<idv id="box">
    <form method="post">
        <div class="login"> Signup</div>

     
        <input type="text" name="password"><br><br>
        <input type="password" name="password"><br><br>

        <input type="submit" valu=" Signup"><br><br>
        <a href="login.php">click to login</a><br><br>
    </form>
</div>
</body>
</html>
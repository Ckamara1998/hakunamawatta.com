<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="myproject.css">
    <title>Voteing System Regerstertion</title>
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
       <h2 class="text-center">Register Account</h2>
       <div class="container">
        <form action=" " method="POST"
         enctype="mulitipart/form-data">
            <div class="mb-3">
            <input class="form-control w-50 m-auto" type="text" name="username" 
        placeholder="Enter Your username" >
            </div>
            <div class="mb-3">
            <input class="form-control w-50 m-auto" type="text" name="mobile" 
        placeholder="Enter Your Number" required="required">
            </div>
            <div class="mb-3">
            <input class="form-control w-50 m-auto" type="password" name="password" 
        placeholder="Enter Your password" required="required">
            </div>
            <div class="mb-3">
            <input class="form-control w-50 m-auto" type="password" name="cpassword" 
        placeholder="Comfrim password" required="required">
            </div>
            <div class="mb-3">
            <input class="form-control w-50 m-auto" type="file" name="photo">
            </div>
            <div class="mb-3">
        <select name="std" class="form-select w-50 m-auto" >
            <option value="Group">Group</option>                                             
            <option value="voter">Voter</option>
        </select>
        </div>
    
        <button class="btn btn-dark my-4" type="submit" name='submit'>Register</button>
        <p>Already have an account? <a href="myproject.php">Login here</a></p>
    
        </form>
       </div>
    </div>
    
</body>
</html>
<?php 
include('connect.php');

if(isset($_POST['submit']))
{
    $username=htmlspecialchars($_POST['username']);
$mobile=htmlspecialchars($_POST['mobile']);
$password=htmlspecialchars($_POST['password']);
$cpassword=htmlspecialchars($_POST['cpassword']);
$image=htmlspecialchars($_FILES['photo']['name']);
$tmp_name=htmlspecialchars($_FILES['photo']['tmp_name']);
$std=htmlspecialchars($_POST['std']);
$req=$bdd->preparare("INSERT INTO votingsystem username, mobile, password, photo,standard,status,voter VALUES(:username,mobile,password,photo,standard,status,voter)");
$req->execute(array('username'=>$username, 'mobile'=>$mobile, 'password'=>$password, 'photo'=>$photo, 'standard'=>$standard, 'status'=>$status, 'voter'=>$voter));
}

?>
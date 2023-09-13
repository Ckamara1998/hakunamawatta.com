<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="myproject.css">
    <title>voting project</title>
</head>
<body class="bg-black">
   <h1 class="text-info text-center p-4">Voting System</h1>
   <div class="bg-info">
<h2 class="text-center">Voter Login</h2>
<div class="container" class="text-center">
    <form action="./action/login.php" method="POST">
        <div class="mb-3">
        <input class="form-control w-50 m-auto" type="taxt" name="username" 
        placeholder="Enter your name" required="required">
        </div>
        <div class="mb-3">
        <input class="form-control w-50 m-auto" type="taxt" name="mobile" 
        placeholder="Enter your Number" required="required" maxlenght="10" minlength="10">
        </div>
        <div class="mb-3">
        <input class="form-control w-50 m-auto" type="Password" name="Password" 
        placeholder="Enter your Password" required="required">
        </div>
        <div class="mb-3">
        <select name="std" class="form-select w-50 m-auto" >
            <option value="Group">Group</option>
            <option value="voter">Voter</option>
        </select>
        </div>
        <div class="one">
        <button class="btn btn-dark my-4" type="submit">Login</button>
        <p>Don't have an account? <a href="regerstration.php">Register here</a></p>
        </div>
    </form>
</div>
   </div>
</body>
</html>
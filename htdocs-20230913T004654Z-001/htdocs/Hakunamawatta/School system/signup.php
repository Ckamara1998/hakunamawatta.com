<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
</head>
<body>
    <?php
    require('./connect.php');
    if(isset($_POST['sign_up'])){
        $name=$_POST['name'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $confPassword=$_POST['confpassword'];
       if(!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&& !empty($_POST['pass'])){
        $p=crud::conect()->prepare('INSERT INTO crudtable(name,lastName,email,pass) VALUES(:n,:l,:e,:p)');
        $p->bindValue(':n', $name);
        $p->bindValue(':l', $lastName);
        $p->bindValue(':e', $email);
        $p->bindValue(':p', $password);
        $p->execute();
        
       }
    }
    ?>
    <div class="form">
        <form action="" method="POST">
            <h3 class="title">Sign Up This Form</h3>
            <input text="text" name="name" placeholder="Name" required>
            <input text="text" name="lastName" placeholder="Last Name" required>
            <input text="text" name="email" placeholder="Email" required>
            <input text="text" name="pass" placeholder="Password" required>
            <input text="text" name="confpassword" placeholder="Confrim Password" required>
            <button class="submit" type="sign_up" value="sign_up" name="sign_up">Sign_Up</button>
            <p>Click here to <a href="login.php">Log In</a></p>
        </form>
    </div>
</body>
</html>
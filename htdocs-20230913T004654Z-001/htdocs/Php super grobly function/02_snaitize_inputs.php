<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
}
?>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" required>
        </div>
        <input type="submit" name="submit" placeholder="Submit" value="submit">
    </form>
   
</body>
</html>
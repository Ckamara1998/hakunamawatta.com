<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center>
    <div class="form">
        <h1>Please put in your Information</h1>
        <form action="form.php" method="post">
            <input name="firstname"  type="text" placeholder="FirstName" required><br>
            <input name="lastname"  type="text" placeholder="LastName" required><br>
            <input name="email"  type="text" placeholder="Email" required><br>
          <textarea name="message"  placeholder="Message" cols="30" rows="10"></textarea>><br>
                 <button name="submit" type="submit">Submit Your Form</button><br>
        </form>
    </div></center>
</body>
</html>




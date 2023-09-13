
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form.php</title>
</head>
<body>
<?php
include("kamaracooper4@gmail.com");
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send the email
  mail('kamaracooper4@gmail.com', 'Form submission', $message, "From: $email");
}

?>
</body>
</html>
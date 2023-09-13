<?php
session_start();
?>
 <?php 
    /*this is how we set our cookies*/
   setcookie('pseudo', 'M@teo21', time() + 365*24*3600); ?>

   <?php 
   /*I therefore recommend that you create your cookie rather like this*/
   setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true);
   setcookie('country', 'Liberia', time() + 365*24*3600, null, null, false, true);
   setcookie('country', 'China', time() + 365*24*3600, null, null, false, true);
   ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <?PHP
include('work.html');
echo$_POST['firstname'] and $_POST['message'] and $_POST['country'] and $_POST['myfile'] and $_POST['password'] 
and $_POST['case'] and $_POST['fries'] 
?>

<p>
Hey ! I remember you ! <br /> Your name is <?php 
echo $_COOKIE['pseudo'] ?> and you come from <?php echo $_COOKIE['country']?> is that 
right? </p>

<p><strong> Your name :</strong> <br><br><?php echo htmlspecialchars ($_POST['firstname']); ?> !</p>
<p><strong>Your country :</strong><br><br> <?php echo htmlspecialchars  ($_POST['country']); ?> !</p>
<p><strong>Your message:</strong><br><br> <?php echo htmlspecialchars ($_POST['message']); ?> !</p>
<p><strong>your files</strong><br> <?php echo htmlspecialchars ($_POST['myfile']);?> !</p>
<p><strong>This is your passwords</strong><br> <?php echo htmlspecialchars ($_POST['password']);?> !</p>
<p><strong>mask of person</strong><br>My dog = <?php echo htmlspecialchars ($_POST['case']);?> !</p>
<p> <strong>Do you like fries?</strong><br> <?php echo htmlspecialchars ($_POST['fries']);?> !</p>

<?php
if (isset($_FILES['myfile' ]) AND $_FILES['myfile']['error'] == 0) {
    if ($_FILES['myfile' ]['size'] <= 1000000) {
    }
  {  $fileinfo = pathinfo($_FILES['myfile' ]['name']); $extension_upload = $fileinfo ['extension'];
$extensions_allowed = array('jpg', 'jpeg', 'gif','png');
 if (in_array($extension_upload, $extensions_authorized));
{
    move_uploaded_file ($_FILES['myfile' ]['tmp_name' ],'uploads/' . basename($_FILES['myfile' ]['name']));
    echo "The sending was successful!" ; 
}
} 
    }
?>
    <?php 
   if (isset($_POST['password' ]) AND $_POST['password']  == "kangaroo"){
    }
    if (!isset($_POST['password']) or $_POST['password'] != "kangaroo") {
    }else{
        "passwoed is incorrt";}
 ?>
 <pre>
 <?php
 print_r($_POST);
 ?>
   </pre> 
  
  
</body>
</html>


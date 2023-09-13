<?php

include('db_conn.php');  

if(isset($_POST['sendingmail'])){
   $name = htmlspecialchars($_POST['username']);
   $mail = htmlspecialchars($_POST['email']);
   $message = htmlspecialchars($_POST['message']);

   if($name && $mail && $message){
      $request = $db->prepare ("INSERT INTO boxmail(username, email, msg) VALUES (:username, :email, :msg)");
      $request ->execute(array('username'=>$name, 'email'=>$mail, 'msg'=>$message));

      echo "Dear ".$name."Your message was sent !";
   }
   else{
      echo "Error sending message";
   }
}
else{
   echo "You did not fill everything";
}

?>
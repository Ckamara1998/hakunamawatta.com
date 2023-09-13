<?php 
include('connect.php');


$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];
 

if($username!=$cpassword){
    echo'<script>
    alert("password do not march"); 
    windoe.location="registeration.php"
    </scriptt>';
}

else{
    move_upload_files($std_name,"../uploads/$image");

    $sql="insert into 'voters' (username, mobile, 
    password, photo, standard, status, votes) value('$username','$mobile','$password','$cpassword','$image','$std',0,0)";

    $result=mysqli_query($con,$sql);

    if($result){
        echo'<script>
    alert("Registration successfull"); 
    windoe.location="registeration.php"
    </scriptt>'; 
    }
}
?>
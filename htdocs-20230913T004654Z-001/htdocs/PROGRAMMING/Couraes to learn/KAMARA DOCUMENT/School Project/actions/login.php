<?php
include('connect.php');
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];


$sql="select * from 'voters' where usrename='$username' and mobile='$mobile' and
password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
$sql="select username,phpot,voter,id from 'usredata' where standard='group'";
$resultgroup=mysqli_query($con,$sql);
if(mysqli_num_rows($resultgroup)>0){
    $group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['group']=$group;

}
$data=mysqli_fetch_array($result);
$session['id']=$data['id'];
$SESSION['status']=$data['status'];                       
$session['data']=$data;

echo '<script>
windoe.location="../actions/dashboard.php";
</script>';

}else{
    echo '<script>
    alart("invalid credentials");
    windoe.location="../";
    </script>';
}
?>
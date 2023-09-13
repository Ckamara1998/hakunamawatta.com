<?php
session_start();
$data=$session['data'];

if($_session['ststus']==1){
$_status='< class="text-danger">Voted</br>';
}else{
    $_status='< class="text-danger">Not Voted</br>';
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="myproject.css">
    <title>Dashboard</title>
</head>
<body style="background-color: blue;">
    <div class="container-1">
        <a href="myproject.php"><button class="btn">Back</button></a>
        <a href="logout.php"><button class="btn">Logout</button></a>
        <h1>Voting System</h1>
        <div class="row">
            <div class="group">
                <div class="row-2">
                    <div class="col-9" > 
                        <img src="../upload/<?php echo $data['photo']?>" alt="Group image">
                    </div>
                    <div class="col-8">
                        <strong>Group Name:</strong>
                        <?php echo$data['group'];?><br>
                        <strong>Vote:</strong>
                        <?php echo$data['voter'];?><br>
                    </div>
                </div>
                <hr> 
            </div>
               
            <div class="user">
           <div class="col-3">
           <img src="../upload/<?php echo $data['photo']?>" alt="User image">
           </div>
           <div class="col-2">
           <strong>Name:</strong>
           <?php echo$data['usernsme'];?><br>
            <strong>Mobile:</strong>
            <?php echo$data['mobile'];?><br>
            <strong>Status:</strong>
            <?php echo$data['status'];?><br>
            </div>
        </div>
    </div>
</body>
</html>
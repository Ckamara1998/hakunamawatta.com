<?php
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$phone  = $_POST['phone No'];
$gender = $_POST['gender'];
$message = $_POST['message'];




if(!enpty($Username)  !empty($Email)  !empty($phone) !empty($gender) !empty($message)) 

{
$hoet = "localhost"
$dbUsername ="root"
$dbpassword = ""
$dbname = "regesteruser"

$con = new mysqli($host, $dbUsername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('connect error('. mysqli_connect_error().')'. mysqli_connect_error())
}
else{
    $SELECT = "SELECT email from regesteruser where email = ? limit 1";
    $INSERT ="INSERT INto regesteruser (useaname, email, phone, gender, message) value ((?,?,?,?,?)"


    $stmt = $conn->prepare($SELECT);
    $stnt->bind_param("s", $email);
    $stmt->excute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->blind_param("ssssii", $username, $email, $gender, $phone, $message);
        $stmt->execute();

        echo "NEW record inserted successfull";
    }
    else{
        echo "someone already register using this email";
    }
    stmt->close();
    $conn->close();
}
}else{
    echo "All field aer required";
    die();
}
?>

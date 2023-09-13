/*$_GET - Contains infoumation about variables passed through a URL or a form.
$_POST - Contains information about variables passed through a forn.
$_COOKIE - Contains information about variables passed through a cookie. 
$_SESSION - Contains information about variables passed through a session. 
$_SERVER - Contains information about the server environment. 
$_ENV - Contains information about the environment variables. 
$_FILES - Contains information about the files uploaded to the script.
$_REQUEST - Contains information about cariables passed through the form of URL.*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST'];?></li>
        <li>Server Name: <?php echo  $_SERVER['SERVER_NAME'];?></li>
        <li>Server_PORT: <?php echo  $_SERVER['SERVER_PORT'];?></li>
        <li>PHP_SELF: <?php echo  $_SERVER['PHP_SELF'];?></li>
        <li>REQUEST_URI: <?php echo  $_SERVER['REQUEST_URI'];?></li>
        <li>Server_Software: <?php echo  $_SERVER['SERVER_SOFTWARE'];?></li>
        <li>Current file dir: <?php echo  $_SERVER['PHP_SELF'];?></li>
        <li>REMOTE PORT: <?php echo  $_SERVER['REMOTE_PORT'];?></li>
        <li>CLIENT INFO : <?php echo  $_SERVER['HTTP_USER_AGENT'];?></li>
        <li>REMOTE ADDRESS: <?php echo  $_SERVER['REMOTE_ADDR'];?></li>
    </ul>
</body>
</html>

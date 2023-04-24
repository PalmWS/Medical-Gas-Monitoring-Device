<?php

//dbconnect.php

$MyUserName = DATABASE_USER;
$MyPassword = DATABASE_PASSWORD;
$MyHostname = "localhost";
$My_db = DATABASE_NAME;

$dbh = mysqli_connect($MyHostname,$MyUserName,$MyPassword,$My_db);

?>

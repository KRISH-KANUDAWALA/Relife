<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nss";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if($conn)
{
	echo "";
}else{
	die(mysqli_error($conn));
}


?>
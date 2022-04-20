<?php
define('DB_SERVER','localhost');
define('DB_USER','samuaeve_rootofi');
define('DB_PASS' ,'7M3])k,MR2pr');
define('DB_NAME', 'samuaeve_oficina');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php
$servername = "db";
$username = "root";
$password = "example";
$dbName = "ptstart";
$link = mysqli_connect($servername,$username,$password);
if (!$link){
	die('Error:' . mysqli_error());
}
echo 'Good';
mysqli_close($link);
?>

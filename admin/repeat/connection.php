<?php
session_start();
define('LOCALHOST','localhost');
define('USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','project');
$conn=mysqli_connect(LOCALHOST,USERNAME,DB_PASSWORD) or die(mysqli_error());
$data=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>
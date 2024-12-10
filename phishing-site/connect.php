<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$connect = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset($connect, "UTF8");

?>
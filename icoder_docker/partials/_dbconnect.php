<?php
$host = "db";
$port = "3306";
$username = "root";
$password = "mypassword";
$database = "iprogrammer";

$conn = mysqli_connect($host, $username, $password, $database, intval($port));
?>
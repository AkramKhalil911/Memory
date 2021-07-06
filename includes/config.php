<?php 

$host = "localhost";
$dbname = "memory";
$username = "root";
$password = "";

$conStr = "mysql:host=$host;dbname=$dbname;charset=utf8";
$con = new PDO ($conStr, $username, $password);
$con -> setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

?>
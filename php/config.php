<?php
session_start();


$DB_NAME = "luggage_way";
$DB_USER = "root";
$DB_PWD = "";
$DB_HOST = "localhost";


$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME) or die("Database connection failed please make sure your confirguration are correct in php/config.php");

?>
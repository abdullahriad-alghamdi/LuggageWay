<?php
session_start();


$DB_NAME = "luggfgcw_luggage_way";
$DB_USER = "luggfgcw_luggageway";
$DB_PWD = "0X?IoXn7QJNP";
$DB_HOST = "server277.web-hosting.com";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME) or die("Database connection failed please make sure your confirguration are correct in php/config.php");

?>
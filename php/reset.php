<?php
require_once "config.php";

if(isset($_SESSION["reset_password_email"])){
    $email = $_SESSION["reset_password_email"];
}else{
    echo "Please fill out the forgot form before resetting your password!";
    die;
}

$password = mysqli_real_escape_string($conn, $_POST["password"]);
$c_password = mysqli_real_escape_string($conn, $_POST["c_password"]);

if(empty($password) || empty($c_password)){
    echo "All fields are required";
    die;
}

if($password !== $c_password){
    echo "Passwords does not match.";
    die;
}

$check_sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
if(mysqli_num_rows($check_sql) > 0){
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
    $update_sql = mysqli_query($conn, "UPDATE `users` SET `password` = '$hashed_pwd' WHERE `users`.`email` = '$email';");
    echo "success";
    die;
}
echo "Something went wrong please try again!";
die;
?>
<?php
require_once "config.php";

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
if(isset($_POST["gender"])){
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
}else{
    $gender = "";
}
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$secret_code = mysqli_real_escape_string($conn, $_POST["secret_code"]);

if(empty($name) || empty($email) || empty($password) || empty($gender) || empty($phone)){
    echo "All fields are required";
    die;
}
$check_sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
if(mysqli_num_rows($check_sql) > 0){
    echo "User with that email already exists!";
    die;
}

if(intval($secret_code) < 10){
    echo "Secret code must not be more than 10 digits.";
    die;
}

$hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
$insert_sql = mysqli_query($conn, "INSERT INTO `users` (`id`, `role`, `name`, `gender`, `email`, `password`, `secret_code`, `phone`, `created_at`) VALUES (NULL, 'client', '$name', '$gender', '$email', '$hashed_pwd', '$secret_code', '$phone', current_timestamp())");
if($insert_sql){
    $_SESSION["user_id"] = mysqli_insert_id($conn);
    echo "success";
    die;
}
echo "Something went wrong! Please try again.";
die;
?>
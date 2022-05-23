<?php
require_once "config.php";

$secret_code = mysqli_real_escape_string($conn, $_POST["secret_code"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);

if(empty($email) || empty($secret_code)){
    echo "All fields are required";
    die;
}
$check_sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND secret_code = '$secret_code'");
if(mysqli_num_rows($check_sql) > 0){
    $_SESSION["reset_password_email"] = $email;
    echo "success";
    die;
}else{
    echo "We could not find an account with $email as their email with that secret code.";
    die;
}
die;
?>
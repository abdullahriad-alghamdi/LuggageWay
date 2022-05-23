<?php
require_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$type = mysqli_real_escape_string($conn, $_POST["type"]);

if(empty($email) || empty($password) || empty($type)){
    echo "All fields are required";
    die;
}
$check_sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND role = '$type'");
if(mysqli_num_rows($check_sql) > 0){
    $row = mysqli_fetch_array($check_sql);
    $hashed_pwd = $row["password"];
    if(!password_verify($password, $hashed_pwd)){
        echo "Wrong password for $email.";
        die;
    }else{
        $_SESSION["user_id"] = $row["id"];
        echo "success";
        die;
    }
}else{
    echo "We could not find a/an $type account with $email as their email.";
    die;
}
die;
?>
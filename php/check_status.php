<?php
session_start();

if(isset($_POST["login"])){
    if(isset($_SESSION["user_id"])){
        echo "loggedin";
    }
}
?>
<?php
session_start();

if(isset($_POST["login"])){
    if(isset($_SESSION["user_id"])){
        if($_SESSION["role"] =="admin"){
            $url = "Admin_Orders.html";
        }
        if($_SESSION["role"] =="client"){
            $url = "Client_MyOrders.html";
        }
        if($_SESSION["role"] =="agent"){
            $url = "Agent_MyOrders.html";
        }
        echo json_encode([
            "loggedin" => true,
            "url" => "$url"
        ]);
        die;
    }
}

if(isset($_POST["get_name"])){
    echo $_SESSION["name"];
    die;
}

echo json_encode([
    "error" => true
]);
die;
?>
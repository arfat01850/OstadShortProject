<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $pass_len = $_POST["length"];
    $include_sym = isset($_POST["symbols"]);
    $include_num = isset($_POST["numbers"]);
    $available_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $available_sym = "!@#$%^&*()_/*-+.]}{{\|';:,><?";
    $available_num = "0123456789";

    if($include_sym){
        $available_chars .= $available_sym;
    }
    if($include_num){
        $available_chars .= $available_num;
    }
    $password = "";
    for($i = 0; $i < $pass_len; $i++){
        $password .= $available_chars[rand(0, strlen($available_chars)-1)];
    }
    echo "Your password is: ".$password;
}
?>
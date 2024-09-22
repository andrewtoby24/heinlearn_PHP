<?php

    session_start();
    //PHPSESSID
    $_SESSION["name"] = "Kaung Thant Si Thu";
    $_SESSION["email"] = "thantkaung501@gmail.com";

    if($_SESSION["name"] && $_SESSION["email"]) {
        echo "<h1>My name is ".$_SESSION["name"]."</h1>";
        echo "<h1>My email is ".$_SESSION["email"]."</h1>";
    }else{
        echo "<h1>Empty data.</h1>";
    }
?>
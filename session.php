<?php

    session_start();
    // PHPSSID save in the browser server and save in the local storage under temp/sess_xxx_213
    // php.ini session.gc_maxlifetime= 1440 (24 mins)

    // Use in the Login System (Authentication)
    // Shopping Cart System (e-commerce)
    // User Preferences(Languages, Themes)
    // Multi-step forms (Wizard)
    // Flash messages(Notifications)

    $_SESSION["name"] = "Kaung Thant Si Thu";
    $_SESSION["email"] = "thantkaung501@gmail.com";

    if($_SESSION["name"] && $_SESSION["email"]) {
        echo "<h1>My name is ".$_SESSION["name"]."</h1>";
        echo "<h1>My email is ".$_SESSION["email"]."</h1>";
    }else{
        echo "<h1>Empty data.</h1>";
    }
?>
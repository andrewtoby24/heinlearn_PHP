<?php
    var_dump($_REQUEST);
    // var_dump($_SERVER);
    // var_dump($_GET);
    // var_dump($_POST);
    // var_dump($_FILES);
    // Super Global Variables start with $_
    // $_REQUEST , $_SERVER , $_GET , $_POST , $_FILES
    // $_FILES for carrying the files 

    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];

    echo "<h1>$name</h1>";
    echo "<h1>$email</h1>";
    echo "<h1>$password</h1>";


?>
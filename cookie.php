<?php
    //remember me that contains in the login system
    //Tracking The User data
    //Language Change
    //Cookie storage can store only 4KB

    //setcookie("key","value","expire",domain,path)
    setcookie("age","18", time() + (86400 * 30), "/");

    if($_COOKIE["age"] == "18"){
        echo "You are not gay";
    }else{
        echo "You are very gay";
    }
?>
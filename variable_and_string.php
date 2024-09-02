<?php
    // Variable
    // Naming Rule - No Space, No Special Characters !@#$%^&*() , Can't be a number on first Characters
    // Case Sensitive

    $name = "Kaung Thant Si Thu";
    $address = "Yangon";

    // Double quote & Singe quote
    echo "My name is $name";
    echo '<br>';
    echo 'I live in $address<br>';
    echo 'I live in '.$address;
    echo '<br>';
    echo $name.'. I live in '.$address;
?>
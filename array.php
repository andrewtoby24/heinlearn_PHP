<?php

    //index Array
    $laptops = array("Apple","Samsung","MSI","Asus","Alienware","HP");
    print_r($laptops);
    echo "<br>";
    echo $laptops[2];

    echo "<br>";

    $fruits = [];
    $fruits[0] = "Apple";
    $fruits[1] = "Orange";
    $fruits[2] = "Lemon";
    $fruits[3] = "Mango";
    print_r($fruits);
    
    echo "<br>";

    // Associate Array
    $students = [
        "name" => "Mg Mg",
        "age" => 23,
        "year" => "Second year",
        "email" => "mgmg@gmail.com",
        "phone" => 959954186081,
    ];

    print_r($students);
    echo "<br>";
    echo $students['name'];

    foreach($students as $key=>$value) {
        echo "<h1>$key is $value</h1>";
    }

    //Multidimensional Array
    $foods = [
        'breakfast' => ['Mohingar', 'Nan Gyi Thoke', 'Mont Ti'],
        'lunch' => ['Shan Noodle', 'Burmese Curry'],
        'dinner' => ['Indian Curry','Burmese Tea Salad'],
    ];
    print_r($foods);
    foreach($foods as $key=>$value) {
        foreach($value as $k=>$v) {
            echo "<h3>$v</h3>";
        }
    }
?>
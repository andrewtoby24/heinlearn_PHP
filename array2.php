<?php

    //sorting

    //sort => Array ascending order ( a - z )
    $programmings = ["PHP", "Java", "JavaScript", "C", "C++", "R", "C#", "Python"];

    echo "<h1>Sorting</h1>";
    sort($programmings);
    foreach($programmings as $programming) {
        echo "<h3>$programming</h3>";
    }

    //reverse sort => Array descending order ( z - a )
    echo "<h1>Reverse Sorting</h1>";
    rsort($programmings);
    foreach($programmings as $programming) {
        echo "<h3>$programming</h3>";
    }
    echo "<br>";

    $foods = [
        "breakfast" => "Nan Gyi Thoke",
        "lunch" => "Pad Thai",
        "dinner" => "Mala Xinguo",
    ];

    //ksort() => Associate array ascending order according to key (key sort)
    echo "<h1>K-Sort (Key Sort)</h1>";
    ksort($foods);
    foreach($foods as $key => $food){
        echo "<h3>Key is <i>$key</i> and Value is <i>$food</i>.</h3>";
    }

    //krsort() => Associate array descending order according to key (key reverse sort)
    echo "<h1>K-R-Sort (Reverse Key Sort)</h1>";
    krsort($foods);
    foreach($foods as $key => $food){
        echo "<h3>Key is <i>$key</i> and Value is <i>$food</i>.</h3>";
    }

    //asort() => Asscoiate array ascending order according to value (value sort)
    echo "<h1>A-Sort (Value Sort)</h1>";
    asort($foods);
    foreach($foods as $key => $food){
        echo "<h3>Key is <i>$key</i> and Value is <i>$food</i>.</h3>";
    }

    //arsort() => Associate array descending order according to value (value reverse sort)
    echo "<h1>A-R-Sort (Reverse Value Sort)</h1>";
    arsort($foods);
    foreach($foods as $key => $food){
        echo "<h3>Key is <i>$key</i> and Value is <i>$food</i>.</h3>";
    }

    $colors = ["Red", "Green", "Blue", "Yellow", "Purple"];
    print_r($colors);
    echo "<br>";

    array_push($colors, "Pink", "Violet");
    print_r($colors);
    echo "<br>";

    array_pop($colors);
    print_r($colors);
    echo "<br>";

    unset($colors[2]);
    print_r($colors);
    echo "<br>";

    //Array to String
    $influencers = ["Honey Nway Oo", "Lin Lin", "Min Aung Hlaing", "Monica", "Zing", "Yato", "Bo Kyar"];
    print_r($influencers);
    echo"<br>";
    echo gettype($influencers);

    $influencers_string = implode("/", $influencers);
    echo "<h3>$influencers_string</h3>";
    echo gettype($influencers_string);
    echo "<br>";

    //String to Array
    $influencers_array = explode("/", $influencers_string);
    print_r($influencers_array);
?>
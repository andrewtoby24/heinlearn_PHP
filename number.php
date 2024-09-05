<?php

    $number1 = 300;
    $number2 = 500;

    $number1++; // $number1 + 1
    echo $number1;
    echo "<br>";
    echo $number1++;
    echo "<br>";
    echo $number1;
    echo "<br>";
    echo ++$number2; // 1 + $number2
    echo "<br>";

    $number1 += $number2; // $number1 = $number1 + $number2
    echo $number1;

    $firstNumber = 600;
    $secondNumber = 400;
    $add = $firstNumber + $secondNumber;
    echo "<p>$add</p>";

    $sub = $firstNumber - $secondNumber;
    echo "<p>$sub</p>";

    $mul = $firstNumber * $secondNumber;
    echo "<p>$mul</p>";

    $div = $firstNumber / $secondNumber;
    echo "<p>$div</p>";

    $mod = $firstNumber % $secondNumber;
    echo "<p>$mod</p>";

?>
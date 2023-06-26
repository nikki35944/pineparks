<?php

if ( !empty($_POST['first_number']) && !empty($_POST['operations']) && !empty($_POST['second_number']) ) {
    $firstNumber = $_POST['first_number'];
    $operation = $_POST['operations'];
    $secondNumber = $_POST['second_number'];

    switch ($operation) {
        case '+':
            $result = $firstNumber + $secondNumber;
            break;
        case '-':
            $result = $firstNumber - $secondNumber;
            break;
        case '*':
            $result = $firstNumber * $secondNumber;
            break;
        case '/':
            $result = $firstNumber / $secondNumber;
            break;
    }

    echo $result;
}
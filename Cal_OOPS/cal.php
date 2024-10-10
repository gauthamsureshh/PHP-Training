<?php
    include 'Calculator.php';
    $op = $_POST['operator'];
    $num1 = $_POST['first'];
    $num2 = $_POST['second'];

    $cal = new Calculator((string) $op, (float) $num1, (float)$num2);

    try{
        echo $cal->calculate();
    }
    catch(TypeError $e){
        echo $e->getMessage();
    }
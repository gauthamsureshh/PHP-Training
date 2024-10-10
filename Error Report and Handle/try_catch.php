<?php
    function divide($num1, $num2) : float {
        if($num2 == 0) {
            throw new DivisionByZeroError("Division by zero not possible");
        }
        else {
            return $num1 / $num2;
        }
    }

    try{
        echo  divide(10,0);
    }

    catch(DivisionByZeroError $e) {
        echo $e->getMessage();
    }

    finally {
        echo "<br> Program Terminated";
    }
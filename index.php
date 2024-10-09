<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <label>First Number:</label>
        <input type="text" name="first_number"><br><br>
        <select name="operator">
            <option value="+" >Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
            <option value="%">Modulo Operation</option>
        </select><br><br>
        <label>Second Number:</label>
        <input type="text" name="second_number"><br><br>
        <button type="submit">=</button>
    </form>
</body>
</html>

<?php
    $firstnumber = $_POST['first_number'];
    $secondnumber = $_POST['second_number'];
    $operator = $_POST['operator'];
    $result = Cal($firstnumber,$secondnumber,$operator);
    echo "Result of {$firstnumber} {$operator} {$secondnumber} is {$result} ";
    function Cal($first,$second,$op){
        switch($op){
            case "+":
                return $first + $second;
                break;
            case "-":
                return $first - $second;
                break;
            case "*":
                return $first * $second;
                break;
            case "/":
                return $first / $second;
                break;
            case "%":
                return $first % $second;
                break;
        }
    };

?>
<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    include 'autoloader.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoload</title>
</head>
<body>
   <?php
        $person = new Person();
        echo 'My name is '.$person->name();
        $address = new House();
        echo "<br>Address:" . $address->address();
   ?>
</body>
</html>


<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    function customError($errno, $errstr, $errfile, $errline){
        $message = "Error: [$errno] $errstr in $errfile on line $errline\n";
        error_log($message,3,"error_log");
    }
    set_error_handler("customError");
    echo $var;
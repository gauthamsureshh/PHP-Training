<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className): void{
    $path = "";
    $ext = ".php";
    $fullPath = $path . $className . $ext;

    if (file_exists($fullPath)) {
        include_once ($fullPath);
    }
    else{
        echo "File not found";
    }

}
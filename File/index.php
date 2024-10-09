<?php
    $file_name = "data";

    $file = fopen($file_name, "w");

    if ($file) {
        fwrite($file, "ad file \n");
        echo 'File added';
    }
    else{
        echo "File not found";
    }

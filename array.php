<?php 
    $foods = array('Apple','Kiwi','Banana');
    array_push($foods,'Mango'); // pushes element at the end of the array
    array_pop($foods);// removes element found at the end of array
    array_shift($foods); // removes the first element from the array
    array_unshift($foods,'Dragon Fruit'); // adds element to the first positon of array
    $rev_arrays = array_reverse($foods);
    foreach($foods as $food){
        echo "{$food} <br>";
    }
    echo "<br>Reverse Array<br>";
    foreach($rev_arrays as $rev_array){
        echo "{$rev_array} <br>";
    }

    echo "<br> Number of elements in array is ",count($foods);

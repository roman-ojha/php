<?php

    $a=[1,2,3,4,5,6,7,8,9,10];

    // array_slice() function will create a new array from the existing array
    // array_slice(<array>,<start>,<length>,<preserve_keys>);
    // this will return new array
    $newArray = array_slice($a, 3, 5);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    $newArray = array_slice($a, -2, 2);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // you can also pass preserve_keys
    // preserve_keys means while returning new array it will assign the return array with those key that are already get associated with those element that are being returned
    // this also works with associative array
    $newArray = array_slice($a, -2, 2, true);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        output:
        Array
        (
            [8] => 9
            [9] => 10
        )
    */

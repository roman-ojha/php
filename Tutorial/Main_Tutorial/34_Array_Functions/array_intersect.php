<?php

    /*
        *) Intersect Functions:
            -> it will help to get the common thing from the multiple arrays
            -> functions are:
                -> array_intersect
                    -> return new array where value of the arrays are same
                -> array_intersect_key
                    -> return new array where key of the arrays are same
                -> array_intersect_assoc
                    -> return new array where key and the value of arrays are same
                -> array_intersect_uassoc
                -> array_intersect_ukey
                -> array_uintersect
                -> array_uintersect_assoc
                -> array_uintersect_assoc
    */

    $a=["a"=>"Roman","b"=>"Razz","c"=>"Ojha"];
    $b=["a"=>"Roman","c"=>"Ojha","b"=>"Jack"];
    $c=["c"=>"Ojha"];

    // array_intersect(): will match value only
    $newArray = array_intersect($a, $b);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        Output:
        Array
        (
            [a] => Roman
            [c] => Ojha
        )
    */
    $newArray = array_intersect($a, $b, $c);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array_intersect_key(): will match keys only
    $newArray=array_intersect_key($a, $b);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        Output:
        Array
        (
            [a] => Roman
            [b] => Razz
            [c] => Ojha
        )
    */

    // array_intersect_assoc(): will match both 'value' and 'key'
    $newArray=array_intersect_assoc($a, $b);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        Output:
        Array
        (
        [a] => Roman
        [c] => Ojha
        )
    */

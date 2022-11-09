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

    // array_intersect_uassoc(<array_1>,<array_2>,<user_defined_function>);
    // u means user defined function
    function compare($a, $b)
    {
        // return 0 when value get matched
        // return 1 when '$a' value is greater then '$b' value
        // return -1 when '$a' value is smaller then '$b' value

        // now this function will get array as parameter
        if ($a===$b) {
            // if both of the value and keys get matched and it's types as well
            return 0;
        }
        return ($a>$b) ? 1 : -1;
    }
    $newArray = array_intersect_uassoc($a, $b, "compare");
    // here 'compare' is a function name
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

    // also we can use php string function
    $newArray = array_intersect_uassoc($a, $b, "strcasecmp");
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


    // array_uintersect_assoc(): same as 'array_intersect_uassoc()'
    $newArray = array_uintersect_assoc($a, $b, "compare");
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array_intersect_ukey()
    $newArray = array_intersect_ukey($a, $b, "compare");
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array_uintersect()
    $newArray = array_uintersect($a, $b, "compare");
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array_uintersect_uassoc()
    // this function will try to match keys as well as value but we have to create two different function
    function compareKeys($a, $b)
    {
        // now this function will only compare and match keys
        if ($a===$b) {
            return 0;
        }
        return ($a>$b) ? 1 : -1;
    }
    function compareValue($a, $b)
    {
        // now this function will only compare and match values
        if ($a===$b) {
            return 0;
        }
        return ($a>$b) ? 1 : -1;
    }
    $newArray = array_uintersect_uassoc($a, $b, "compareKeys", "compareValue");
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

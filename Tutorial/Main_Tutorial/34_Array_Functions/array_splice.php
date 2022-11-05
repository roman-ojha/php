<?php

    $a = [1,2,3,4,5];
    $b = [10,9,8];
    // array_splice() function will replace element of one array with another
    // and also we can use this function to remove element from the array
    // array_splice(<array_1>,<start_from_you_want_to_replace>,<number_of_length_to_replace>,<array_2>)

    // deleting element from one array
    // and 'array_splice' change on given array and not return new array
    array_splice($a, 1);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    /*
        output:
        Array
        (
        [0] => 1
        )
    */

    $a = [1,2,3,4,5];
    array_splice($a, 2, 2);
    // this will remove 2 element from second index
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    /*
        output:
        Array
        (
            [0] => 1
            [1] => 2
            [2] => 4
            [3] => 5
        )
    */

    $a = [1,2,3,4,5];
    array_splice($a, 1, -1);
    // this will start from 1 index upto second last element
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    /*
        output:
        Array
        (
            [0] => 1
            [1] => 5
        )
    */

    // now we will append one array to another array
    $a = [1,2,3,4,5];
    array_splice($a, 1, 3, $b);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    /*
        output:
        Array
        (
            [0] => 1
            [1] => 10
            [2] => 9
            [3] => 8
            [4] => 5
        )
    */

    $a = [1,2,3,4,5];
    array_splice($a, 1, count($a), $b);
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    /*
        Output:
        Array
        (
            [0] => 1
            [1] => 10
            [2] => 9
            [3] => 8
        )
    */

    // insert array in between or anywhere on the another array
    $a = [1,2,3,4,5];
    array_splice($a, 1, 0, $b);
    // 0 means without removing any element place on 1st index
    echo "<pre>";
    print_r($a);
    echo "</pre>";

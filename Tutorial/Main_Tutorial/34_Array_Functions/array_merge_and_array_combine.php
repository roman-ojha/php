<?php

    $arr1 = ['name'=>"roman"];
    $arr2 =['razz','name'=>'ojha',55,31];

    // array_merge() combine Index or Associative array
    $newArray = array_merge($arr1, $arr2);
    // if both the array have same key then the value that come after will replace the previous value
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    // Output: Array ( [name] => ojha [0] => razz [1] => 55 [2] => 31 )

    // we can also use '+' operator to merge the array
    // but if the both array have same key then previous value will replace the the value then will going to come in next
    $newArray = $arr1 + $arr2;
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    // Output:Array([name] => roman [0] => razz [1] => 55 [2] => 31)

    // array_merge_recursive() combine Multidimensional associative array
    // so if there is same key available in both of the array then rather then replacing one with another it will create new internal associative array
    $newArray = array_merge_recursive($arr1, $arr2);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        Output:
        Array
        (
            [name] => Array
                (
                    [0] => roman
                    [1] => ojha
                )

            [0] => razz
            [1] => 55
            [2] => 31
        )
    */

    // array_combine() will used only for Index array
    // to combine two array both array need to have same length
    // then first index of first array will become key and the first index of second array will become value of that key
    $name = ["jack","harry"];
    $age =[55,31];
    $newArray = array_combine($name, $age);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    /*
        Output:
            Array
            (
            [jack] => 55
            [harry] => 31
            )
    */

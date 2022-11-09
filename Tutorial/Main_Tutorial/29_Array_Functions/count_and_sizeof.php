<?php

    $name=["Roman","Razz","Harry","Jack","Tom","Roman",50];
    $emp = [
        [1,"Roman","Manager",800000],
        [2,"Hari","Salesman",300000],
        [3,"Jack","Driver",200000],
    ];
    $marks=[
       "Krishna"=>[
        "physics"=>85,
        "chemistry"=>89,
        "math"=>78,
       ],
       "Harry"=>[
        "physics"=>68,
        "chemistry"=>79,
        "math"=>73,
       ],
       "Jack"=>[
        "physics"=>62,
        "chemistry"=>92,
        "math"=>67,
       ],
    ];

    // Array Count: ===============================================

    // to get the size of array:
    echo count($name)."<br/>";
    // for multidimensional array
    echo count($emp, 1)."<br/>";
    // to check size of internal multidimensional array
    echo count($emp[0])."<br/>";

    // to get the size of array:
    echo sizeof($name)."<br/>";

    // to count the number of same value repeated on the array:
    array_count_values($name);
    // 'array_count_value' return the array
    print_r(array_count_values($name));
    // return : Array ( [Roman] => 2 [Razz] => 1 [Harry] => 1 [Jack] => 1 [Tom] => 1 )

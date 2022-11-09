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

    // Array Search: =================================================
    // in_array() ====
    // in_array(<value_to_search>,<array_variable_name>,<strict>);
    echo "<br/>".in_array("Roman", $name);
    // return '1 | 0'
    // 1 when it found in array
    // p whe it didn't found in array

    echo "<br/>".in_array("50", $name, true);
    // if 'strict' = false & we search for 55 and found '55' then return 1
    // if 'strict' = true & we search for 55 and found '55' then return 0

    // for multi dimensional array
    echo "<br/>".in_array([1,"Roman","Manager",800000], $emp);

    // array_search() ====
    // array_search(<value_to_search>,<array_variable_name>);
    // return 'index | key'
    echo "<br/>".array_search("Roman", $name);
    // for multi dimensional array
    echo "<br/>".array_search(
        [
        "physics"=>85,
        "chemistry"=>89,
        "math"=>78,
       ],
        $marks
    );

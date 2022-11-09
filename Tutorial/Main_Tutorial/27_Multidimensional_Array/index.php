<?php
    $emp1 = array(
        array(1,"Roman","Manager",800000),
        array(2,"Hari","Salesman",300000),
        array(3,"Jack","Driver",200000),
    );
    echo $emp1[0][1];

    echo "<pre>";
    print_r($emp1);
    echo "</pre>";

    for($i=0;$i<3;$i++){
        for($j=0;$j<4;$j++){
            echo $emp1[$i][$j];
        }
        echo "<br/>";
    }

    // using foreach
    foreach($emp1 as $employee){
        foreach($employee as $info){
            echo $info;
        }
        echo "<br/>";
    }
    
    $emp2 = [
        [1,"Roman","Manager",800000],
        [2,"Hari","Salesman",300000],
        [3,"Jack","Driver",200000],
    ];

    // Multidimensional Associative array:
    $marks=[
       "Krishna"=>[
        "physic"=>85,
        "chemistry"=>89,
        "math"=>78,
       ], 
       "Harry"=>[
        "physic"=>68,
        "chemistry"=>79,
        "math"=>73,
       ], 
       "Jack"=>[
        "physic"=>62,
        "chemistry"=>92,
        "math"=>67,
       ], 
    ];

    foreach($marks as $name=> $marks){
        echo "<h1>$name : </h1><br/>";
        foreach($marks as $subject => $mark){
            echo "$subject : $mark <br/>";
        }
        echo "<br/>";
    }

?>
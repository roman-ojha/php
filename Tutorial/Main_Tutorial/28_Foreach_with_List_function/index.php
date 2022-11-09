<?php
    // here we will see who we can use foreach loop with list function
    // if we will use list function inside foreach loop and the array is multidimensional then we don't have to use nested array as we did previously
    $emp = [
        [1,"Roman","Manager",800000],
        [2,"Hari","Salesman",300000],
        [3,"Jack","Driver",200000],
    ];

    foreach($emp as list($id,$name,$position,$salary)){
        // $id is associated with first index of the multidimensional array 
        // $name is associated with second index of the multidimensional array 
        echo "$id, $name, $position, $salary <br/>";
    }

    // with associative array:
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
    foreach($marks as $name=>list("physics"=>$mark1,"chemistry"=>$mark2,"math"=>$mark3)){
        echo "<h1>$name : </h1><br/>";
        echo "physic : $mark1 <br/>";
        echo "chemistry : $mark2 <br/>";
        echo "math : $mark3 <br/>";
    }

?>
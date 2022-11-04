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
?>
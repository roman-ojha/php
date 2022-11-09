<?php
   // normal array got store with respect to index
    $arr=array(10,20,30); // array(<index_0>,<index_1>,<index_2>);

    // Associative array:
    // key => value
    // 'value' is associated with 'key'
    $arr2=array(
        "name"=>"ROMAN",
        "gender"=>"male",
    );
    echo $arr2["name"];
    echo $arr2["gender"];
    print_r($arr2);
    var_dump($arr2);
    // 'var_dump' will also show the data type of the array

    // another way to create Associative array:
    $arr3=[
        "name"=>"ROMAN",
        "gender"=>"male",
        1=>"3",
    ];
    $arr3["name"]="Ojha";

    echo $arr3["name"];
    echo $arr3["gender"];
    echo $arr3[1];
?>
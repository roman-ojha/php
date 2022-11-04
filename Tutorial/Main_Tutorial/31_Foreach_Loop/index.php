<?php
    // we use foreach loop in array data type
    $num=array(10,20,30);
    foreach($num as $value){
        echo $value."<br/>";
    }

    $user=[
        "name"=>"ROMAN",
        "gender"=>"male",
        "id"=>01,
    ];

    foreach($user as $key=>$value){
        echo "$key : "."$value"."<br/>";
    }
?>
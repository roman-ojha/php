<?php
    $arr0=array("HTML","CSS","JS",31,true,0.32,null,false);
    // echo $arr0[0];

    // using the short array syntax
    $arr1=["ROMAN","RAZZ"];
    // echo $arr1[1];

    // key=>value
    $arr2=array(
        "name"=>"ROMAN",
        "gender"=>"male",
    );
    echo $arr2["name"];

    // another way to print array for testing purposes
    echo "<pre>";
    print_r($arr0);
    echo "</pre>";
    /*
        Output:
            Array
            (
                [0] => HTML
                [1] => CSS
                [2] => JS
                [3] => 31
                [4] => 1
                [5] => 0.32
                [6] => 
                [7] => 
            )
    */

    // another way to create and assign value
    $num[0]="r";
    $num[1]="o";
    $num[2]="m";
    $num[3]="a";
    $num[4]="n";
    echo "<pre>";
    print_r($num);
    echo "</pre>";
?>
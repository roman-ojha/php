<?php
    /*
        if(<condition>){
            // statement 1
        }else{
            // statement 2
        }
    */

    $a=3;
    $b=2;
    if ($a>$b){
        echo "a is greater then b";
    }else{
        echo "b is greater then a";
    }

    if ($a == "3"){
        // return true
        echo "a is equal to '3'";
    }

    if ($a === "3"){
        // return false
        echo "type of a is string";
    }else{
        echo "type of a is integer";
    }

?>
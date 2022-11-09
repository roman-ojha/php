<?php
    /*
    different way to pass argument:
        1. Passing arguments as value
            -> learned previously
        2. Passing argument as reference
    */

    // Passing argument as reference
    $a=10;
    function changeValue(&$a){
        $a=20;
    }
    echo "before change: ".$a."<br/>";
    changeValue($a);
    echo "after change: ".$a."<br/>";
?>
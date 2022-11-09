<?php
    // global variable
    $a=10;
    $b=20;

    function test(){
        // local variable
        $x=10;
        echo $x;

        // by default we can't be able to use global variable inside the function
        // so, to use the global variable inside the function we have to use 'global' keyword
        global $a,$b;
        // so here we are saying that we want to use '$a' variable inside this function
        $a=20;
        $b=30;
    }

    test();
    echo $a;
    echo $b;
?>
<?php
    /*
        PHP Variables Scope
            -> In PHP, variables can be declared anywhere in the script.
            -> PHP has three different variable scopes:
                • local
                • global
                • static
            -> A variable declared outside a function has a global scope and can only 
            be accessed outside a function.
            -> A variable declared within a function has a LOCAL SCOPE and can 
            only be accessed within that function
    */
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

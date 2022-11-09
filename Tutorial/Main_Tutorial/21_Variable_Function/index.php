<?php
    // first we have to define the function
    function wow($name){
        echo $name;
    }
    // after that we have to assign that function into variable by passing as string
    $func = "wow";
    // then we will call the assigned variable as function
    $func("roman");
    // after doing this we can be able to run the 'wow' function

    // Another way:
    $sayHello = function($str){
        echo "$str";
    };
    $sayHello("Hello");
?>
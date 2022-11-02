<?php
    // change value of variable
    $x=50;
    echo $x;
    $x=30;
    echo $x;
    $x="roman";
    echo $x;

    // constant variable:
    // constant variable are global variables
    // can't use $ sign with constant variable name 
    // can't redefine/reassign constant variable
    // syntax:
    // define(<variable_name>,<value>,<case_insensitive>)
    // if (<case_insensitive> == true){//then we can access variable with any case sensitive 'NUM','Num','num' }
    // else { // we can't access using any case sensitive }
    define("num",500,false);
    echo num;

    define("str","Roman",false);
    echo str;

    define("arr",["roman","ojha","razz"]);
    echo arr[2];
?>
<?php

    /*
        *) Namespace:
            -> we can't include same name class on one file
            -> for that we can use namespace we will help us to include same name class file in one single file
    */

    // including both file containing same class name but with namespace
    require './first.php';
    include './second.php';
    require './first_v2.php';

    // creating object of namespace 'first' 'User' class
    $first_user = new first\User();

    // creating object of namespace 'second' 'User' class
    $second_user = new second\User();

    function sayHello()
    {
        echo "Hello from Index </br>";
    }
    // calling 'sayHello' function of same file
    sayHello();
    // calling namespace function
    first\sayHello();
    second\sayHello();

    // getting 'first' namespace returned 'User' object
    $first_user = second\firstObj();

    // calling 'first\v2' namespace function
    \first\v2\sayHello();

    // if you this that 'first\v2' is a long name and you want to use different name of sort name rather then that then we have to do this
    use first\v2 as fv2;

    fv2\sayHello();

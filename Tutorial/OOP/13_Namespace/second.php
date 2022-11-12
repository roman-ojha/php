<?php

    // different we to declare and define namespace

    namespace second{
        class User
        {
            public function __construct()
            {
                echo "User From Second </br>" ;
            }

            public function secondFunc()
            {
                echo "Calling Second User function";
            }
        }

        function sayHello()
        {
            echo "Hello from Second </br>";
        }

        function firstObj(): \first\User
        {
            // return 'first' namespace 'User' Object

            // create object of 'User' from 'first' namespace
            $first_user = new \first\User();

            return $first_user;
        }
    };

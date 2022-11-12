<?php


    // we can even give namespace name like this

    namespace first\v2;

    class User
    {
        public function __construct()
        {
            echo "User From First V2 </br>" ;
        }

        public function firstFunc()
        {
            echo "Calling First V2 User function";
        }
    }

    function sayHello()
    {
        echo "Hello from First V2 </br>";
    }

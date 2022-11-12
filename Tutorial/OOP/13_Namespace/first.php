<?php

    // so now after writing namespace 'first' all of the bello code that we will write after this namespace became the code of namespace 'first'

    namespace first;

    class User
    {
        public function __construct()
        {
            echo "User From First </br>" ;
        }

        public function firstFunc()
        {
            echo "Calling First User function";
        }
    }

    function sayHello()
    {
        echo "Hello from First </br>";
    }

<?php

    /*
        *) __callStatic():
            -> if we will try to call private or non existing static method of class then this function will automatically get called
    */

    class User
    {
        // here this is static method, it means that I can call this method without create object
        // but because this is a private method we can't be able to call outside class
        private static function hello($msg)
        {
            echo $msg."";
        }

        // to call '__callStatic' method we have to create static method
        public static function __callStatic($name, $arguments)
        {
            // '$name' : name of the function
            // '$arguments' : all function arguments as array

            if (method_exists(__CLASS__, $name)) {
                // because we can't access object instance inside static method we will pass class name
                // __CLASS__ : name of the call where we are accessing this
                // method_exist(<class_name>,<static_method_name>)
                echo "$name is private static method </br>";

                // now here we will call static function like this:
                call_user_func_array([__CLASS__,$name], $arguments);
            // call_user_func_array([<class_name>,<name_of_method>], <arguments>);
            } else {
                echo "$name static method doesn't exist </br>";
            }
        }
    }

    User::hello("Hello from User");
    User::show("Hello from User");

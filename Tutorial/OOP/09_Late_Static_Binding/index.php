<?php

    /*
        *) Late Static Binding:
            ->
    */

    class Person
    {
        protected static $name="Roman";

        public function show()
        {
            echo self::$name."</br>";
        }
    }

    class Account extends Person
    {
        protected static $name="Jack";
    }

    // we are crating the object of Derived Class
    $account=new Account();
    // calling Base Class method
    $account->show();
    // this will print : "Roman", Not 'Jack'
    // it happen because we used 'self' keyword
    // so it mean it will bind that class value where that function exist
    // in this case 'show()' function class had been defined in 'Person' Class

    // but if we want to get 'Jack' value rather then 'Roman' the we have a concept called "Late Static Binding"
    // for that we will replace the keyword 'self' with 'static'
    class Person2
    {
        protected static $name="Roman";

        public function show()
        {
            // now if we inherit this class and create new class and we override the '$name' on that Derived class
            // then this will get bind with Derived class value rather then Base class value
            echo static::$name."</br>";
        }
    }

    class Account2 extends Person2
    {
        protected static $name="Jack";
    }

    $account2=new Account2();
    $account2->show();

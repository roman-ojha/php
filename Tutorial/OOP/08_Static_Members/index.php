<?php

    /*
        *) Static Members
            -> It help us to use Class Member Variable(Properties) and class Member Methods without create object
            -> for that we have to use 'static' keyword
            -> Rules:
                1. can't be able to use '$this' keyword inside static member function
                2. to access static member variable inside static member function we have to use 'self' keyword
                3. if Inside One Class only contain all the static member variable and static member function the that class automatically become Static Class
                4. can't be able to access normal member variable from static member function
    */

    class Base
    {
        // static member variable
        public static $name="Roman";
        public $id=10;

        public function __construct($name)
        {
            // can call static member from inside class
            self::staticShow();
            self::$name=$name;
        }

        public function show()
        {
            echo self::$name."</br>";
            echo $this->id."</br>";
        }

        // static member function
        public static function staticShow()
        {
            echo self::$name."</br>";
        }
    }

    class Derived extends Base
    {
        // accessing static variable from derived class
        public static function staticShow()
        {
            // to access member variable and function of base class we can use 'parent' keyword
            echo parent::$name."</br>";

            // also we can use '<base_class_name' to call base class member variable and function
            echo Base::$name."</br>";
        }

        public function show()
        {
            parent::show();
            Base::staticShow();
        }
    }


    $base = new Base("Hero");
    // accessing member variable and member function without object

    echo Base::$name."</br>";
    Base::staticShow();

    $derived = new Derived("Jack");
    $derived->show();

    Derived::staticShow();
    echo Derived::$name."</br>";

<?php

    /*
        *) __toString():
            -> by default we can't be able to 'echo' object, we can only print object property
            -> if we will try to print it, it will throw an error
            -> to handle that exception we can use '__toString()' function
            -> so when ever we will try to print object then this event will occur and then '__toString()' function will get called
    */

    function getItem(string $str)
    {
        echo $str;
    }

    class Student
    {
        public $name = "Roman";
        private $course = "PHP";

        public function __toString()
        {
            // now here we must have to return string value that will get assign where it is trying to access that object
            $class = __CLASS__; // return name of the class
            $class = get_class($this); // also return name of the class
            return "Can't print object as a string of $class </br>";
        }
    }

    $student = new Student();

    // by default this will not going throw an error
    echo $student;

    // here again we are trying to pass 'Student' type of variable into the function that take 'string'
    // now again this will throw an error
    getItem($student);

    /*
        Output:
            Can't print object as a string of Student
            Can't print object as a string of Student
    */

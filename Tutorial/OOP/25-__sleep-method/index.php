<?php

    /*
        *) __sleep():
            -> by default we can't be able to save object into:
                1. File
                2. Session
                3. Database
            -> to save it we first have to convert it into Array()
            -> so to convert Object into Array we have 'serialize()' function
            -> but 'serialize()' function will convert all of the property into array but sometimes we don't want to serialize all of the property
            -> if we just want to serialize some of the property into Array
            -> therefore, whenever we will try to call serialize function by passing object before that it will call '__sleep()' method
            -> now we can return only required number of property as Array from the '_sleep()' method
    */


    class Student
    {
        public $course = "PHP";
        private $first_name;
        private $last_name;

        public function setName($fname, $lname)
        {
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __sleep()
        {
            // this function will get call when ever we will try to serialize object

            // now here we will return array of our need
            return array('first_name','last_name');
            // array(<keys_name_in_string>);
        }
    }

    $student = new Student();
    $student->setName("Roman", "Ojha");

    // serializing 'Student' object into array
    $stObjToStr =  serialize($student);
    echo $stObjToStr;
    /*
        By default it will return:
            O:7:"Student":3:{s:6:"course";s:3:"PHP";s:19:"Studentfirst_name";s:5:"Roman";s:18:"Studentlast_name";s:4:"Ojha";}

            -> 'O:7' : object of seven character of name of class
            -> '3' : contain 3 properties
            -> 's:6' : string value of 6 character property
    */

    /*
        After using __sleep() method it will return:
            O:7:"Student":2:{s:19:"Studentfirst_name";s:5:"Roman";s:18:"Studentlast_name";s:4:"Ojha";}
    */

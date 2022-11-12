<?php

    /*
        *) __set():
            -> if we will try to set value to private or non existing property of class then this function will automatically get called
    */

    class Student
    {
        private $name;

        public function __get($property)
        {
            echo "$property property Does not exist or is private </br>";
        }

        public function __set($property, $value)
        {
            // this function will get property name and it's value as parameter

            if (property_exists($this, $property)) {
                // 'property_exists()' function will help us to check, is the given property exist on given class or not
                // property exist but is private
                echo "Can't be able to set value: $value to private property : $property </br>";


                // but because we got the value as well now we can set the property as well
                $this->$property = $value;
            } else {
                echo "Can't be able to set value: $value to non existing property : $property </br>";
            }
        }

        public function show()
        {
            echo $this->name."</br>";
        }
    }

    $student = new Student();

    // here we are trying to set value to private or non existing property
    $student->name = "Roman";
    $student->course = "PHP";

    // here w are trying to get value to private or non existing property
    $student->age;
    $student->show();
    /*
        Output:
        Can't be able to set value: Roman to private property : name
        Can't be able to set value: PHP to non existing property : course
        age property Does not exist or is private
        Roman
    */

<?php

    /*
        *) unset():
            -> unset function will unset the variable
            -> so it destroy variable
            -> after we unset the variable if we will try to access that variable then that variable will get undefined
        *) __unset():
            -> but by default we can't unset class private property.
            -> because of that when we will try to call 'unset()' method for private property of class then this function will get invoked
    */

    $name="Roman";
    echo isset($name)."</br>";
    unset($name);
    // echo $name; // undefined variable

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

        public function __unset($property)
        {
            // '$property' : name of the property that we are trying to unset that might be private or doesn't exist

            if (property_exists($this, $property)) {
                echo "$property is private property, trying to unset private property</br>";
                // we will try to unset private property if user try to unset private property
                unset($this->$property);
            } else {
                echo "$property doesn't exist </br>";
            }
        }
    }

    $student = new Student();

    // trying to unset public property of 'Student'
    echo $student->course."</br>";
    unset($student->course);

    $student->setName("Roman", "Ojha");
    print_r($student);
    echo "</br>";
    /*
        Output:
            Student Object ( [first_name:Student:private] => Roman [last_name:Student:private] => Ojha )
    */

    // trying to unset private property of 'Student'
    unset($student->first_name);
    print_r($student);
    echo "</br>";
    /*
        Output:
            Student Object ( [last_name:Student:private] => Ojha )
    */

    // trying to unset property of 'Student' that doesn't exist
    unset($student->id);

<?php

    /*
        *) __wakeup():
            -> if we want to unserialize the serialized data then we will use 'unserialize()' function
            -> and this 'unserialize()' function will return object
            -> so, when ever unserialize function will get called then on parallel it will run '__wakeup()' method of that object
    */

    class Student
    {
        public $course = "PHP";
        private $first_name;
        private $last_name;
        private $conn;

        public function setName($fname, $lname)
        {
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __construct()
        {
            $this->conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");
        }

        public function __sleep()
        {
            // after serializing we will close the MySQL connection
            mysqli_close($this->conn);
            return array('first_name','last_name');
        }

        public function __wakeup()
        {
            // this function will get called when we call unserialize function by passing serialized object string
            echo "This is a wakeup method </br>";

            // now we will again create connection after we deserialize object
            $this->conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");
        }
    }

    $student = new Student();
    $student->setName("Roman", "Ojha");

    // serializing object data into string
    $stObjToStr =  serialize($student);

    // deserializing string data into object
    $stStrToObj = unserialize($stObjToStr);
    print_r($stStrToObj);
    echo "</br>";

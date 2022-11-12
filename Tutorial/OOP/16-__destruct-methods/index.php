<?php

    /*
        *) __destruct:
            -> Destructor Method will get called automatically when the object goes out of scope

    */

    class Abc
    {
        // here we will use this variable to connect to the MySQL database
        private $coon;

        public function __construct()
        {
            echo "This is constructor"."</br>";

            // we will connect to database when object is been created
            $this->conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");
            if (!mysqli_connect_errno()) {
                echo "Database connected successfully </br>";
            }
        }
        public function hello()
        {
            echo "hello world"."</br>";
        }
        public function __destruct()
        {
            echo "This is destructor"."</br>";

            // now we will close database connection after object get destructed
            $res = mysqli_close($this->conn);
            if ($res) {
                echo "Database got closed </br>";
            }
        }
    }

    $abc = new Abc();
    $abc->hello();
    $abc2 = new Abc();

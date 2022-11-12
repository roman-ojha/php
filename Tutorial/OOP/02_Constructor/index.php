<?php

    class Person
    {
        public $name="Default Name";
        public $age;

        // Creating Constructor
        public function __construct($name, $age=0)
        {
            $this->name=$name;
            $this->age=$age;
        }

        public function show()
        {
            echo "Name: ".$this->name."</br> Age: ".$this->age;
        }
    }

    $p1=new Person("Roman", 55);
    $p1->show();
    $p2=new Person("Roman");
    $p2->show();

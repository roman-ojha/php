<?php

    class employee
    {
        public $name;
        public $age;
        public $salary;


        public function __construct($name, $age, $salary)
        {
            echo "Employee Constructor";
            $this->name=$name;
            $this->age=$age;
            $this->salary=$salary;
        }

        public function info()
        {
            echo "<h1>Employee Profile</h1>";
            echo "Employee Name: ".$this->name."</br>";
            echo "Employee Age: ".$this->age."</br>";
            echo "Employee Salary: ".$this->salary."</br>";
        }
    }


    class manager extends employee
    {
        public $ta=1000;
        public $phone =300;
        public $totalSalary;


        // if we have not create constructor for 'manager' then automatically it will call 'employee' constructor and pass the constructor argument
        // but if we create a new constructor in 'manager' class then we just over ride the constructor so we have to call 'employee' constructor by our self
        // public function __construct()
        // {
        //     echo "Manager Constructor";
        // }


        // function override
        public function info()
        {
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h1>Employee Profile</h1>";
            echo "Employee Name: ".$this->name."</br>";
            echo "Employee Age: ".$this->age."</br>";
            echo "Employee Salary: ".$this->totalSalary."</br>";
        }
    }

    $e1=new employee("Razz", 31, 5000000);
    $e1->info();


    $m1=new manager("Jack", 21, 50000000);
    $m1->info();

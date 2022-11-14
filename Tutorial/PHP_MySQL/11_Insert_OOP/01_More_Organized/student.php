<?php

    class Student
    {
        // public $sid;
        public $name;
        public $address;
        public $class;
        public $phone;

        public function __construct($name, $address, $class, $phone)
        {
            $this->name = $name;
            $this->address = $address;
            $this->class = $class;
            $this->phone = $phone;
        }
    }

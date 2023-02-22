<?php
    class Vehicle{
        public $name;
        function __construct($name){
            $this->name = $name;
        }
    }

    class Car extends Vehicle{
        
        function __construct($name){
            // calling parent class constructor
            parent::__construct($name);
        }
    }

<?php

    class Student
    {
        // public $sid;
        public $sname;
        public $saddress;
        public $sclass;
        public $sphone;

        public function __construct($name, $address, $class, $phone)
        {
            $this->sname = $name;
            $this->saddress = $address;
            $this->sclass = $class;
            $this->sphone = $phone;
        }
    }

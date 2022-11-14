<?php

    class Student
    {
        // public $sid;
        public string $sname;
        public string $saddress;
        public int $sclass;
        public int $sphone;

        public function __construct($name, $address, $class, $phone)
        {
            $this->sname = $name;
            $this->saddress = $address;
            $this->sclass = $class;
            $this->sphone = $phone;
        }
    }

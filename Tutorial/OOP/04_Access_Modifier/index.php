<?php

    /*
        *) Access Modifiers:
            1. public
                -> can access from from outside the class
            2. protected
                -> can access only by inherited classes
            3. private
                -> can't access by inherited as well as can't access from outside the class
    */


    class Base
    {
        public $name;
        protected $age;
        private $id;

        public function __construct($name, $age, $id)
        {
            $this->name=$name;
            $this->age=$age;
            $this->id=$id;
        }

        private function echoUser()
        {
            echo $this->name."</br>";
            echo $this->age."</br>";
            echo $this->id."</br>";
        }

        public function show()
        {
            $this->echoUser();
        }

        protected function returnId()
        {
            // now by doing this we can access the id from outside as well
            echo $this->id."</br>";
        }
    }

    class Derived extends Base
    {
        public function show()
        {
            echo $this->name."</br>";
            echo $this->age."</br>";
            echo $this->returnId()."</br>";
        }
    }
    $base = new Base("Harry", 13, 01);
    $derived = new Derived("Jack", 17, 02);
    // but 'Derived' constructor will pass all the three required argument to 'Base' Class

    $base->show();
    $derived->show();

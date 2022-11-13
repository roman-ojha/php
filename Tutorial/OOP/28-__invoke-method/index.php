<?php

    /*
        *) __invoke():
            -> this is a magic method and will get called whenever we will try to call object as function
    */

    class Calculation
    {
        public $a;
        public $b;

        public function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
        }

        public function sum()
        {
            echo $this->a + $this->b."</br>";
        }

        public function __invoke()
        {
            echo "Can't call Object as function </br>";
        }
    }

    $calculation = new Calculation(1, 2);
    $calculation->sum();

    // calling object as function
    // by default it will throw Fatal error
    // but if we add '__invoke()' method then Fatal error will get resolve
    $calculation();

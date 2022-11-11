<?php

    /*
        *) Procedural
        *) OOP
            -> Object oriented programming
            -> More famous then Procedural Because:
                -> Code more Modular and reusable
                -> Well Organized code
                -> Easier or debug
                -> Best for medium to large project
            -> OOPs Based frameworks
                1. Codeigniter
                2. Laravel
                3. CakePHP
                4. Symfony
                5. Yii
                6. Zend

        *) Class:
            -> Blue print / Template
            -> Have:
                1. Properties
                2. Methods
        *) Object:
            ->
    */

    // Creating Class
    class Number
    {
        // Creating Properties
        public $a;
        public $b;
        public $c;


        // Creating Methods
        public function sum()
        {
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        public function sub()
        {
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    // creating object
    $num=new Number();

    // assigning to public properties
    $num->a=10;
    $num->b=20;

    // calling public methods
    echo $num->sum()."</br>";
    echo $num->sub()."</br>";

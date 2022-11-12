<?php

    class A
    {
        public $name="A Class";

        public function show()
        {
            echo $this->name;
        }
    }

    class B extends A
    {
        // property override
        public $name="B Class";

        // function override
        public function show()
        {
            // calling A class Function
            A::show();
        }
    }

    $a =new A();
    $a->show();
    $b = new B();
    $b->show();

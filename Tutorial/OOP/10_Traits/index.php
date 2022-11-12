<?php

    /*
        *) Traits
            -> Traits help us to use the same function inside multiple classes
    */

    // creating trait
    trait Hello
    {
        // now we can use this function multiple times inside classes
        public function sayHello()
        {
            echo "Hello world </br>";
        }

        private function sayHi()
        {
            echo "Hi Everyone </br>";
        }
    }

    trait Bye
    {
        // now we can use this function multiple times inside classes
        public function sayBye()
        {
            echo "Bye world </br>";
        }
    }

    trait Greeting
    {
        // using other traits inside trait
        use Hello;
        use Bye;
    }

    class A
    {
        // using trait inside class
        use Hello;
        use Bye;
        // added multiple traits inside one class

        public function say()
        {
            $this->sayHello();
            $this->sayHi();
            $this->sayBye();
        }
    }

    class B
    {
        use Hello;
    }

    class C
    {
        use Greeting;
    }

    $a = new A();
    $b = new B();
    $c = new C();

    // now accessing class function that we defined inside trait and reused it on classes
    $a->say();
    $b->sayHello();

    $c->sayHello();
    $c->sayBye();

<?php

    /*
        *) Priority for Method Overriding between 'trait', 'base class', 'derived class':
            priority 1st: derived class function
            priority 2nd: trait function
            priority 3: base class function
    */

    trait Hello
    {
        public function sayHello()
        {
            echo "Hello everyone from Hello Trait </br>";
        }

        private function privateHello()
        {
            echo "Private Hello from Hello trait";
        }
    }

    trait Hi
    {
        public function sayHello()
        {
            echo "Hello everyone from Hi Trait </br>";
        }
    }

    class Base
    {
        public function sayHello()
        {
            echo "Hello from Base </br>";
        }
    }

    class Child extends Base
    {
        use Hello;
        // overriding 'Hello' trait 'sayHello' function
        public function sayHello()
        {
            echo "Hello from Child </br>";
        }
    }

    $base = new Child();
    $base->sayHello();

    class A
    {
        // use Hello;
        // use Hi;

        // because both trait have same function 'sayHello' for that we have to specify only which trait function you want to use it in this class
        use Hello,Hi{
            Hello::sayHello insteadof Hi;
            // here we are using 'Hello' trait 'sayHello' function instead of 'Hi' trait

            // but if you want to use 'sayHello' function of both trait then you can change the name of the function of one trait here:
            Hi::sayHello as sayHi;
            // now here we can use 'sayHello' function as 'sayHi' from 'Hi' trait
        }
    }

    $a= new A();
    $a->sayHello();
    $a->sayHi();

    class B
    {
        // we can create the 'privateHello' function inside 'Hello' trait with private access modifier
        // but we can change the access modifier of trait function inside class as well
        use Hello{
            Hello::privateHello as public newPrivateHello;
            // now this 'privateHello' function became publicly access outside the class
            // here 'public' keyword is to change access modifier to public
            // and  'newPrivateHello' is the new function name for that function
        }
    }

    $b = new B();
    $b->newPrivateHello();

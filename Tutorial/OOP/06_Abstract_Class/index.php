<?php

/*
        *) Abstract Class:
            -> if we define a class as Abstract class then we can't create an object of that class
            -> to use methods and properties of that abstract class we will create the derived class of that abstract and then we will use it
            -> When we are creating the abstract class then we have to follow 2 condition as well:
                1. every Abstract class should have one abstract method
                2. show define/implement the abstract method in derived class
    */

// Abstract Class
abstract class A
{
    protected $name;
    // abstract method

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function echo($id);
    // we will not define the abstract class method on abstract class we will override this class on derived class and defined there
}

class B extends A
{
    // defining the abstract method
    public function echo($id)
    {
        echo $this->name . "<br/>";
        echo $id . "</br>";
    }
}

$b = new B("Roman");
$b->echo(10);

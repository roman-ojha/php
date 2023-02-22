<?php

/*
        *) Abstract Class:
            -> if we define a class as Abstract class then we can't create an object of that class
            -> to use methods and properties of that abstract class we will create the derived class of that abstract and then we will use it
            -> When we are creating the abstract class then we have to follow 2 condition as well:
                1. every Abstract class should have one abstract method
                2. show define/implement the abstract method in derived class

            -> Abstract classes are the classes in which at least one method is abstract.
            -> In PHP abstract classes are declared with the help of abstract keyword.
            -> Classes defined as abstract cannot be instantiated
            -> Methods defined as abstract simply declare the method's signature; they cannot define the implementation.
            -> Use of abstract classes are that all base classes implementing this class should give implementation of abstract methods declared in parent class.
            -> Note: An abstract class can have non abstract methods. In fact, it can even have properties, and properties couldn't be abstract.
            -> So, when a child class is inherited from an abstract class, we have the following rules:
                • The child class method must be defined with the same name and it re-sdeclares the parent abstract method
                • The child class method must be defined with the same or a less restricted access modifier
                • The number of required arguments must be the same. However, the child class may have optional arguments in addition
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

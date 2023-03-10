<?php

/*
        *) Interface:
            -> just by inheriting multiple class into one class is not possible
            -> to create one class that inherit multiple class for that we have to create Interface
            -> Rule:
                -> rather then create parent class we will create Interface
                -> Can't create properties or member variable Inside interface
                -> Works as abstract class
                -> Can't create object of Interface
                -> we will declare methods into Interface but we will not define it
                -> should define/implement the declared function on in interface into derived class
                -> can't use private & protected access modifier while declaring function inside Interface
                -> can use access modifier while defining Interface function into Derived class
    */

interface Parent1
{
    public function calc($a, $b);
}

interface Parent2
{
    public function sub($c, $d);
}

class Child implements Parent1, Parent2
{
    public function calc($a, $b)
    {
        return $a + $b;
    }
    public function sub($c, $d)
    {
        return $c - $d;
    }
}

$child = new Child();
echo $child->calc(1, 2) . "</br>";
echo $child->sub(13, 3) . "</br>";

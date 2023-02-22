<?php
// The final keyword can be used to prevent class inheritance or to prevent method overriding

// final Keyword class inheritance:
final class Person
{
}
// This is not possible
// class Employee extends Person{
// }


// final Keyword prevent method overriding
class Person2
{
    final function get_name()
    {
        return "rom";
    }
}
class Employee2 extends Person2
{

    // can't override the final method like 'get_name()'
    // function get_name()
    // {
    // }
}

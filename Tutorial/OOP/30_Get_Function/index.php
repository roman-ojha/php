<?php

    /*
        *) Get Functions:
            -> List of Get method that php provide:
                01. get_class
                        -> return name of the class of passed object instance.
                02. get_parent_class
                        -> return passed object instance parent class name.
                03. get_class_methods
                        -> return all the public methods that are defined on the class if you call from outside the class.
                        -> return all the public, private and protected method if call it from inside class.
                04. get_class_vars
                        -> return all the public classes member variables if called from outside the class.
                        -> return all the public, private and protected class member variables if called it from inside class.
                05. get_object_vars
                        -> return all public variable name of the given object instance if called from outside the class
                        -> return all public, private and protected variable name of the given object instance in called from inside the class
                06. get_called_class
                        -> return for which class the function is being called
                07. get_declared_classes
                        -> return all the classes that is available of that scope
                08. get_declared_interfaces
                        -> return all the interfaces that is declared in that scope
                09. get_declared_traits
                        -> return all the traits that is declared in that scope
                10. class_alias
                        -> this allow us to create another name of the existing class
    */

    class ParentClass
    {
        public static function test()
        {
            // get_called_class():
            // return for which class the function is being called
            var_dump(get_called_class());
            echo "</br>";
        }
    }

    class MyClass extends ParentClass
    {
        public $name = "Roman";
        private $course = "PHP";
        public function __construct()
        {
        }

        public function className()
        {
            echo "Class Name: ".get_class($this)."</br>";
        }

        public function parentClassName()
        {
            echo "Parent class of MyClass: ".get_parent_class($this)."</br>";
        }

        public function returnAllMethods()
        {
            return get_class_methods($this);
        }

        public function returnAllVars()
        {
            return get_class_vars(__CLASS__);
        }

        public function returnAllObjVars()
        {
            return get_object_vars($this);
        }

        private function privateFunc()
        {
        }
    }

    $myClass = new MyClass();

    // get_class(<object_instance>):
    $myClass->className();
    echo "Class Name: ".get_class($myClass)."</br>";

    // get_parent_class(<child_object_instance>):
    $myClass->parentClassName();
    echo "Parent class of MyClass: ".get_parent_class($myClass)."</br>";

    // get_class_methods(<object_instance> | <class_name>):
    echo "All method of MyClass:";
    echo "<pre>";
    // these return only public methods
    print_r(get_class_methods('MyClass'));
    print_r(get_class_methods($myClass));
    // this return all public, private and protected methods
    print_r($myClass->returnAllMethods());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [0] => __construct
            [1] => className
            [2] => parentClassName
            [3] => showAllMethods
        )
        Array
        (
            [0] => __construct
            [1] => className
            [2] => parentClassName
            [3] => showAllMethods
        )
        Array
        (
            [0] => __construct
            [1] => className
            [2] => parentClassName
            [3] => showAllMethods
            [4] => privateFunc
        )
    */

    // get_class_vars(<class_name>):
    echo "All variables of MyClass: <pre>";
    // return all public variable
    print_r(get_class_vars(get_class($myClass)));
    // this will return all public, private and protected variable
    print_r($myClass->returnAllVars());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [name] => Roman
        )
        Array
        (
            [name] => Roman
            [course] => PHP
        )
    */

    // get_object_vars(<object_instance>):
    echo "All variable of \$myClass Object: <pre>";
    // return all public variables
    print_r(get_object_vars($myClass));
    // return all public, private and protected variables
    print_r($myClass->returnAllObjVars());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [name] => Roman
        )
        Array
        (
            [name] => Roman
            [course] => PHP
        )
    */


    // for 'get_called_class()':
    ParentClass::test();
    MyClass::test();
    /*
    Output:
        string(11) "ParentClass"
        string(7) "MyClass"
    */

    // get_declared_classes():
    echo "<pre>";
    print_r(get_declared_classes());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [0] => stdClass
            [1] => InternalIterator
            [2] => Exception
            [3] => ErrorException
            [4] => Error
            ..........
            [161] => ParentClass
            [162] => MyClass
        )
    */

    // get_declared_classes():
    echo "<pre>";
    print_r(get_declared_classes());
    echo "</pre>";


    // get_declared_interfaces():
    interface ABC
    {
    }
    echo "<pre>";
    print_r(get_declared_interfaces());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [0] => Traversable
            [1] => IteratorAggregate
            [2] => Iterator
            [3] => Serializable
            [4] => ArrayAccess
            .........
            [23] => ABC
        )
    */

    // get_declared_traits():
    trait MyTrait
    {
    }
    echo "<pre>";
    print_r(get_declared_traits());
    echo "</pre>";
    /*
    Output:
        Array
        (
            [0] => MyTrait
        )
    */

    // class_alias(<original_class_name>,<another_class_name>):
    class_alias('MyClass', 'Mc');
    // now create the class with 'Mc'
    $mc = new Mc();
    echo $mc->name;

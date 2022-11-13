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
                07. get_declared_classes
                08. get_declared_interfaces
                09. get_declared_traits
                10. class_alias
    */

    class ParentClass
    {
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

    //

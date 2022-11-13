<?php

    /*
        *) Conditional Functions:
            -> these function return true or false
            -> List of Condition functions:
                1. class_exists()
                    -> we will pass name of the class and will return does class exist or not
                2. interface_exists()
                    -> we will pass name of the interface and will return does interface exist or not
                3. method_exists()
                    -> we will pass name of the method and will return does method exist or not
                4. trait_exits()
                    -> we will pass name of trait and will return does trait exist or not
                5. property_exists()
                    -> we will pas name of the property and will return does property exist or not
                6. is_a()
                    -> to check does particular object is of <class_name> or not
                7. is_subclass_of()
                    -> to check doest particular object is subclass of an object or not
    */

    class MyClass
    {
        public $name;
        public function myMethod()
        {
        }
    }

    // class_exists(<class_name>):
    if (class_exists('MyClass')) {
        echo "MyClass exist </br>";
        // if class exist then we can create object of that class here
        $myClass = new MyClass();
    } else {
        echo "MyClass doesn't exist </br>";
    }

    interface MyInterface
    {
    }

    // interface_exists(<interface_name>):
    if (interface_exists('MyInterface')) {
        echo "MyInterface exist </br>";

        // if interface exist we will implement new class with that Interface
        class NewClass implements MyInterface
        {
        }
    } else {
        echo "MyInterface doesn't exist </br>";
    }

    // method_exists(<object_instance>,<method_name>):
    // first we have to create object of that class
    $myClass2 = new MyClass();
    if (method_exists($myClass2, 'myMethod')) {
        echo "MyMethod on MyClass exist </br>";
        $myClass2->myMethod();
    } else {
        echo "MyMethod on MyClass doesn't exist </br>";
    }

    trait MyTrait
    {
        public function MyMethod()
        {
        }
    }

    // trait_exists(<trait_name>):
    if (trait_exists('MyTrait')) {
        echo "MyTrait exist </br>";

        // if required trait exist then we will going to create class with use of that trait
        class MyTraitClass
        {
            use MyTrait;
        }
    } else {
        echo "MyTrait doesn't exist </br>";
    }

    // property_exists(<object_instance>,<property_name>):
    if (property_exists($myClass2, 'name')) {
        echo "name on MyClass exist </br>";
        echo $myClass2->name;
    } else {
        echo "name on MyClass doesn't exist </br>";
    }

    // is_a(<object_instance>,<class_name>):
    if (is_a($myClass2, 'MyClass')) {
        echo "\$myClass2 is an object of MyClass</br>";
    } else {
        echo "\$myClass2 is not an object of MyClass</br>";
    }

    // is_subclass_of(<child_object_instance>,<parent_class_name>):
    class ChildClass extends MyClass
    {
    }
    $childClass = new ChildClass();
    if (is_subclass_of($childClass, "MyClass")) {
        echo "\$childClass is an object of subclass of MyClass</br>";
    } else {
        echo "\$childClass is not an object of subclass of MyClass</br>";
    }

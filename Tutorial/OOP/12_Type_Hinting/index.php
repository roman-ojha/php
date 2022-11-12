<?php

    /*
        *) Type Hinting
            -> on PHP 7 it got name as 'Type declaration'
            -> Type Hinting help to give a type for the variable
            -> Valid DataTypes to use as Type Hinting:
                1. int
                2. float
                3. string
                4. bool
                5. array
                6. <class_/_interface_name>
                7. object
    */

    class Hello
    {
        public function sayHello()
        {
            echo "Hello Everyone </br>";
        }
    }

    class Bye
    {
        public function sayBye()
        {
            echo "Bye Everyone </br>";
        }
    }

    // passing class Type parameter
    function wow(Hello $hello, Bye $bye)
    {
        $hello->sayHello();
        $bye->sayBye();
    }

    $hello = new Hello();
    $bye = new Bye();
    wow($hello, $bye);

    class School
    {
        public function getNames(Student $names)
        {
            // take 'Student' object as type
            foreach ($names->Names() as $name) {
                echo $name."</br>";
            }
        }
    }
    class Student
    {
        public function Names(): array
        {
            // declaring return type for function
            return ["Ram","Krishna","Gopal"];
        }
    }
    $school = new School();
    $student = new Student();
    $school->getNames($student);

<?php

    $a = 5;

    // here we are doing copy by value
    $b = $a;

    // here we are assigning the address of $a into $b
    // copy by reference:
    // so it means that $b is referencing $a
    $b = &$a;

    // now if I will try to change the value of $b then the value of $a will also get change
    $b = 10;
    echo $a."</br>";

    // NOTE: but in case of classes we don't need to use copy by reference, because by default it uses copy by references
    class Student
    {
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name = $n;
        }
    }

    $student1 = new Student('Roman');
    echo $student1->name."</br>";

    // now here we will assign '$student1' into '$student2'
    // where we are not copying the value of '$student1' to '$student2'
    // rather we are copying the reference of '$student1' into '$student2'
    $student2 = $student1;

    // now we will try to change the property of '$student2'
    // but it will also change the property value of '$student1'
    $student2->name = "Jack";
    echo $student2->name."</br>";
    echo $student1->name."</br>";
    /*
        Output:
            Jack
            Jack
    */


    // BUT if we don't want this default behavior we can do that as well
    // for that we will use 'clone'
    $student3 = new Student("Harry");

    // now rather then doing copy by reference we will rather clone the exact copy of '$student3' into '$student4'
    $student4 = clone $student3;

    $student4->name = "Tom";
    echo $student3->name."</br>";
    echo $student4->name."</br>";
    /*
        Output:
            Harry
            Tom
    */

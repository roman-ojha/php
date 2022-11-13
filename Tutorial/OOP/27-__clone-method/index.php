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

    // But sometime the problem occur after using 'clone'
    // 'clone' will work perfectly if there is just he normal property inside the class
    // But if we are using different class object as reference inside the class which we are trying to clone then in that cases php won't clone the object
    // EX:
    class CStudent
    {
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name = $n;
        }

        public function setCourse(Course $c)
        {
            // here we are taking '$c' as 'Course' type

            // now we will set the value of '$course' that contain 'Course' type of object
            $this->course = $c;
        }
    }

    class Course
    {
        public $cname;
        public function __construct($cn)
        {
            $this->cname = $cn;
        }
    }

    $cStudent1 = new CStudent("Rock");
    $course1 = new Course("Javascript");

    // now we will pass '$course1' object into the function 'setCourse' from '$cStudent1' object
    $cStudent1->setCourse($course1);

    echo "<pre>";
    print_r($cStudent1);
    echo "</pre>";
    /*
        Output:
        CStudent Object
        (
            [name] => Rock
            [course] => Course Object
                (
                    [cname] => Javascript
                )

        )
    */

    // now here we will clone '$cStudent1' into '$cStudent2'
    $cStudent2 = clone $cStudent1;
    // and also we will change the name of '$cStudent2' which should not get reflect to '$cStudent1' because we had used 'clone'
    $cStudent2->name = "Thor";
    // and also let we try to change the course '$cname' of '$cStudent2'
    $cStudent2->course->cname = "Python";
    // but what will happen is when we will try to clone one object and create another object
    // it will create the copy of object but will not create the copy of object inside the object means sub object
    // it means that clone happen to '$cname' property but not '$course' object property
    // it is still copying with reference
    // therefor, if we will change the value of '$cStudent2' '$course' '$cname' it will also change the same value of '$cStudent1' '$course' '$cname'

    echo "<pre>";
    print_r($cStudent1);
    echo "</pre>";
    echo "<pre>";
    print_r($cStudent2);
    echo "</pre>";
    /*
    Output:
        CStudent Object
        (
            [name] => Rock
            [course] => Course Object
                (
                    [cname] => Python
                )

        )
        CStudent Object
        (
            [name] => Thor
            [course] => Course Object
                (
                    [cname] => Python
                )

        )
    */


    // now if we don't want to change the value of sub-object that we just clone then in that case we have to use '__clone()' function

    class CStudentClone
    {
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name = $n;
        }

        public function __clone()
        {
            // NOTE: this method will get run automatically whenever we are cloning the object by using 'clone' keyword

            // now here we will clone the '$course' which is of type 'CourseClone'
            $this->course = clone $this->course;
        }

        public function setCourse(CourseClone $c)
        {
            $this->course = $c;
        }
    }

    class CourseClone
    {
        public $cname;
        public function __construct($cn)
        {
            $this->cname = $cn;
        }
    }

    $cStudentClone1 = new CStudentClone("Ryan");
    $courseClone1 = new CourseClone("Cpp");
    $cStudentClone1->setCourse($courseClone1);

    // '__clone()' method will get invoked from this line
    $cStudentClone2 = clone $cStudentClone1;

    // now we will try to change the value of '$cStudentClone2' course
    $cStudentClone2->course->cname =  "Ruby";

    echo "<pre>";
    print_r($cStudentClone1);
    echo "</pre>";
    echo "<pre>";
    print_r($cStudentClone2);
    echo "</pre>";
    /*
    Output:
        CStudentClone Object
        (
            [name] => Ryan
            [course] => CourseClone Object
                (
                    [cname] => Cpp
                )

        )
        CStudentClone Object
        (
            [name] => Ryan
            [course] => CourseClone Object
                (
                    [cname] => Ruby
                )

        )
    */

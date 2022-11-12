<?php

    /*
        *) isset():
            -> this function help to check does the given variable value is set or not
            -> return 1 if value is set
            -> return 0 if value isn't set
        *) __isset():
            -> because we can't be able to access private property outside of the class, but we want to check doest the private property get set or not
            -> in that case we have to use '__isset()' function inside the class to check it
            -> so this function will get call when ever we will try to call 'isset()' function outside the class by passing private property on it.
    */

    class User
    {
        public $name;
        private $course;
        private $detail = [
            'detailName'=>"Roman",
            'detailId'=>21,
        ];

        public function setUser($name, $course)
        {
            $this->name=$name;
            $this->course=$course;
        }

        public function __isset($property)
        {
            // so this function will get call when ever we will try to call 'isset()' function outside the class by passing private property on it.

            // we can even check for array key value is set or not
            // for that first we have to see dost the '$property' is key of the array or not
            if (array_key_exists($property, $this->detail)) {
                // echo "key exist </br>";
                // if key exist then we will going to check doest value get set for that particular key inside the array
                if (isset($this->detail[$property])) {
                    return 1;
                }
                return 0;
            } else {
                if (isset($this->$property)) {
                    return 1;
                }
                return 0;
            }
        }
    }

    $user = new User();
    // using isset function outside class with public property
    echo "name: ".isset($user->name)."</br>";
    // using isset function outside class with private property
    echo "course: ".isset($user->course)."</br>";

    // there is another function that called 'empty()' which will help to check is variable is empty or not
    // '__isset' magic function also get call by using 'empty()' function
    echo "name: ".empty($user->name)."</br>";

    // setting value to property
    $user->setUser("Roman", "PHP");

    // checking after setting property
    echo "name: ".isset($user->name)."</br>";
    echo "course: ".isset($user->course)."</br>";

    // to check for the specific key from the associative array
    // here we are passing the 'detailName' which is the key of 'detail' property
    echo "detail['detailName']: ".isset($user->detailName)."</br>";
    echo "detail['detailId']: ".isset($user->detailId)."</br>";

    // checking for non existing property or key
    echo "test: ".isset($user->test)."</br>";

    /*
        Output:
            name:
            course:
            name: 1
            name: 1
            course: 1
            detail['detailName']: 1
            detail['detailId']: 1
            test:
    */

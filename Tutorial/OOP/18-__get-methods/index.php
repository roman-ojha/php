<?php

    /*
        *) __get():
            -> if we will try to call private or non existing variable of class then this function will automatically get called
    */

    class Abc
    {
        private $user = [
            "name"=>"Roman",
            "course"=>"PHP",
            "fee"=>2000,
        ];

        public function __get($property)
        {
            // this function will get 1 argument which will be the name of the property that we are trying to access

            if (array_key_exists($property, $this->user)) {
                // if key exist on '$user' then we can write some code inside here
                return $this->user[$property]."</br>";
            } else {
                return "$property key Does not exist</br>";
            }
        }
    }

    $test = new Abc();
    // we know that we are trying to access private member variable of the class which is not accessible outside the class
    // which will now throw an error
    echo $test->name;
    echo $test->roman;
    echo $test->user;
    /*
        Output:
        Roman
        roman property Does not exist
        user property Does not exist
    */

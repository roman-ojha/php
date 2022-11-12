<?php

    /*
        *) __call():
            -> if we will try to call private or non existing method of class then this function will automatically get called
    */


    class User
    {
        private $name;

        // here this is the private method which can't be able to access outside the class
        private function setName($name)
        {
            $this->name=$name;
        }

        public function __call($name, $arguments)
        {
            // '$name' : name of the function
            // '$arguments' : all function arguments as array


            // we can even now call the private method from here
            if (method_exists($this, $name)) {
                // 'method_exist' function will check does't give function name exist on given object class

                echo "$name function is private </br>";

                // now here we will call private function from here for that we have another function
                call_user_func_array([$this,$name], $arguments);
            // call_user_func_array([<instance_of_object>,<name_of_method>], <arguments>);
            } else {
                echo "$name function doesn't exist </br>";
            }
        }
    }

    $user = new User();

    // calling private method
    $user->setName("Roman");

    //calling non existing method
    $user->getName();

    echo "<pre>";
    print_r($user);
    echo "</pre>";
    /*
        Output:
        bvbsetName function is private
        getName function doesn't exist
        User Object
        (
            [name:User:private] => Roman
        )
    */

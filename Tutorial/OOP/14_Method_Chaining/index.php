<?php

    /*
        *) Method Chaining
            -> it is to call the class object multiple function at once
    */

    class Abc
    {
        // so we want to call 'first', 'second' and 'third' function at once so for that will chain the function
        public function first(): Abc
        {
            echo "first function </br>";
            // bello we will try to call 'second' function from after calling 'first' function
            // so for to call 'second' function we need to have object only through which we can call member function
            // so because of that we have to return object from this function, through return object we will again call 'second' function
            return $this;
        }
        public function second(): Abc
        {
            echo "second function </br>";
            return $this;
        }
        public function third()
        {
            echo "third function </br>";
        }
    }

    $abc = new Abc();
    $abc->first()->second()->third();

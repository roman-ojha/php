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

    function sum(int $a, int $b): int
    {
        // take 2 int value as parameter
        // and return int value as well
        return $a + $b;
    }
    echo sum(1, 2)."</br>";

    function concat(string $a, string $b)
    {
        return $a." ".$b;
    }
    echo concat("Roman", "Ojha")."</br>";

    function showFruits(array $names)
    {
        foreach ($names as $name) {
            echo $name."</br>";
        }
    }
    showFruits(["Apple","Banana","Orange","Grabs"]);

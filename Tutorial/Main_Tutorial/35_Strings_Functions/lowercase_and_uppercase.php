<?php

    /*
        *) Functions:
            1. strtolower()
                -> to convert string to lower
            2. strtoupper()
                -> to convert string to upper
            3. ucfirst()
                -> to convert first character of string to uppercase
            4. ucwords()
                -> to convert first character of all worlds on string to uppercase
            5. icfirst()
                -> to convert first character of string to lowercase
    */
    $name ="Roman Ojha";

    $newStr=strtolower($name);
    echo $newStr."<br/>";
    $newStr=strtoupper($name);
    echo $newStr."<br/>";
    $newStr=lcfirst($name);
    echo $newStr."<br/>";
    $newStr=ucfirst($name);
    echo $newStr."<br/>";
    $newStr=ucwords($name);
    echo $newStr."<br/>";

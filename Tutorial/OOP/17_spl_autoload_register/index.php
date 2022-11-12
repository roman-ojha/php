<?php

    /*
        *) spl_autoload_register:
            -> NOTE: __autoload is no longer been supported
            -> let's say that we have to create a lots of class on different file and trying to include all of those classes file into one single file
            -> but what if there are abundance amount of class file to include
            -> rather then to go on that approach we will use 'spl_autoload_register' method
    */

    // here we are including multiple file that contain the classes
    // require './classes/first.php';
    // require './classes/second.php';

    // rather then requiring like this we will use '__autoload' method

    // so when ever we are creating object from class then automatically the 'spl_autoload_register' function will get called and name of that class will goes as an argument
    spl_autoload_register(function ($file) {
        // so here we will take '$file' as parameter and we will dynamically require all of the php files


        // so here when ever object is being created, on '$file' we will got 'First' & 'Second' as value
        // because those are the name of Class
        // NOTE: name of the class and name of the file should be same
        require './classes/'.$file.".class.php";
    });

    $first = new First();
    $second = new Second();

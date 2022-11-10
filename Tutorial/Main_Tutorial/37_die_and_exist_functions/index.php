<?php

    /*
        *) die() & exit()
            -> these function will help to stop the flow of php program process
    */

    echo "started <br/>";


    // die();
    // now below die function all the statement that we wrote will not get executed
    die("Here is some error <br/>");

    // exist also work exactly same as 'die' function
    exit("Here is some error <br/>");

    echo "ended <br/>";

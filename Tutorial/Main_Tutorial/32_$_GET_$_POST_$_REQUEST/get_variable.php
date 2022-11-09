<?php

    // now after we send the data from 'index.php' file we will be able to access that data using Super Global Variables '$_GET'
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // now here we will get the list of all data that we pass from 'index.php' file
    echo $_GET['fname'].'<br/>';
    echo $_GET['age'].'<br/>';
    echo $_GET['save'].'<br/>';

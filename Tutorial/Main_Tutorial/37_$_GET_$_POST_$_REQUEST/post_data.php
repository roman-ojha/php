<?php

    // now after we send the data from 'index.php' file we will be able to access that data using Super Global Variables '$_POST'
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // now here we will get the list of all data that we pass from 'index.php' file
    echo $_POST['fname'].'<br/>';
    echo $_POST['age'].'<br/>';
    echo $_POST['save'].'<br/>';

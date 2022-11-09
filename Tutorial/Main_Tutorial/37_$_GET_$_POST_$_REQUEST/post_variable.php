<?php

    // now after we send the data from 'index.php' file we will be able to access that data using Super Global Variables '$_POST'
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo $_POST['fname'].'<br/>';
    echo $_POST['age'].'<br/>';
    echo $_POST['save'].'<br/>';

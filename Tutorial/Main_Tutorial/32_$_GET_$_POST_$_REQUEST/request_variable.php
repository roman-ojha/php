<?php

    // '$_REQUEST' variable works for 'GET' as well as 'POST' method
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    echo $_REQUEST['fname'].'<br/>';
    echo $_REQUEST['age'].'<br/>';
    echo $_REQUEST['save'].'<br/>';

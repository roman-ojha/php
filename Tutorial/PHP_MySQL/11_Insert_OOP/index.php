<?php

    include './dbConfig.php';
    // here now we will get '$db' object from which we will perform CURD operation

    $db->insert('students', ['sname'=>'Thor','saddress'=>'LA','sclass'=>1,'sphone'=>9878332212]);
    echo "</br>Insert result is: ";
    print_r($db->getResult());

    echo "</br>";
    print_r($db->getTables());

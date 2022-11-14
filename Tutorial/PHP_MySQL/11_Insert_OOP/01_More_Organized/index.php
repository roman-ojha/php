<?php

    include './dbConfig.php';
    // include './student.php';
    // here now we will get '$db' object from which we will perform CURD operation

    $student1 = new Student('Thor', 'LA', 1, 9878332212);
    // $db->insert('students', ['sname'=>'Thor','saddress'=>'LA','sclass'=>1,'sphone'=>9878332212]);
    $db->insert('students', $student1);
    // echo "</br>Insert result is: ";
    // print_r($db->getResult());

    // echo "</br>";
    // print_r($db->getTables());

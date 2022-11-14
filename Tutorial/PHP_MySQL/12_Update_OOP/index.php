<?php

    include './dbConfig.php';
    // here now we will get '$db' object from which we will perform CURD operation

    // Insert Data
    $student1 = new Student('Thor', 'LA', 1, 9878332212);
    // $db->insert('students', $student1);
    // echo "</br>Insert result is: ";
    // print_r($db->getResult());

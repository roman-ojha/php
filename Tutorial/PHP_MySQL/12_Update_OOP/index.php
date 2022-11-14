<?php

    include './database.php';
    $db = new Database();
    // here now we will get '$db' object from which we will perform CURD operation

    // Insert Data
    $student = new Student('Thor', 'LA', 1, 9878332212);
    // $db->insert('students', $student1);
    // echo "</br>Insert result is: ";
    // print_r($db->getResult());

    // Update Data
    $student = new Student('Superman', 'LA', 1, 9878332212);
    $where = "sname = 'Thor'";
    // $db->update('students', $student, $where);
    // echo "</br>Update result is: ";
    // print_r($db->getResult());

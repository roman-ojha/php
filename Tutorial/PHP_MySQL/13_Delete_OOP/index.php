<?php

    include './database.php';
    $db = new Database();
    // here now we will get '$db' object from which we will perform CURD operation

    // Insert Data
    $table = 'students';
    $student = new Student('Thor', 'LA', 1, 9878332212);
    // $db->insert($table, $student);
    // echo "</br>Insert result is: ";
    // print_r($db->getResult());

    // Update Data
    $table = 'students';
    $student = new Student('Superman', 'LA', 1, 9878332212);
    $where = "sname = 'Thor'";
    $db->update($table, $student, $where);
    echo "</br>Update result is: ";
    print_r($db->getResult());

    // Delete Data
    $table = 'students';
    $where = "sid = '18'";
    $db->delete($table, $where);
    echo "</br>Update result is: ";
    print_r($db->getResult());

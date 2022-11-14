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
    echo "</br>Delete result is: ";
    print_r($db->getResult());

    // Read Data
    // using SQL string
    $db->sql('SELECT * FROM students WHERE sclass = 1');
    echo "</br>SQL result is: <pre>";
    print_r($db->getResult());
    echo "</pre>";

    // using select method
    $table = 'students';
    $columns = 'sid, sname';
    $join = null;
    $where = "sid > 12";
    $order = "sname";
    $limit = '2';
    $db->select($table, $columns, $join, $where, $order, $limit);
    echo "</br>Select result is: <pre>";
    print_r($db->getResult());
    echo "</pre>";

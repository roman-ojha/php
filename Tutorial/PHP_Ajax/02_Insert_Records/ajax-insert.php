<?php

    // $name = $_POST['sname'];

    // first we will get the data 'sname' came from POST method
    // to get the data coming using json we have to use this
    $json = trim(file_get_contents("php://input"));
    $name = json_decode($json)->sname;


    echo json_encode(array('success'=>'true'));

    $conn = mysqli_connect('localhost', 'root', '', 'php_mysql_tutorial') or die('connection failed');

    $sql = "INSERT INTO students(sname) VALUES ('{$name}')";
    $response = mysqli_query($conn, $sql) or die("SQL Query Failed");

    if ($response) {
        // on success we will show json data
        echo json_encode(array('success'=>'true'));
    } else {
        // on fail
        echo json_encode(array('success'=>'false'));
    }

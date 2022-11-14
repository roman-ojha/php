<?php

    /*
    *) MySQLi Object Oriented:
        -> Three Step to follow:
            1. Connection
                -> $conn = new mysqli(<server_name>,<user_name>,<password>,<database_name>);
            2. SQL Query
                -> $result = $conn->query(<SQL_query_string>);
            3. Connection close
                -> $conn->close();
        -> MySQLi Fetch function:
            1. $result->fetch_assoc();
            2. $result->fetch_array();
            3. $result->fetch_row();
            4. $result->fetch_all();
            5. $result->fetch_field();
        -> MySQLi affected rows:
            -> first: $conn->query(<SQL_query_string>);
            -> then: $conn->affected_rows();
        -> MySQLi Error function:
            -> $conn->connect_error;
            -> $conn->connect_errno;
            -> $conn->error;
            -> $conn->error_list;
    */

    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'php_mysql_tutorial';

    // creating connection using Object oriented way
    $conn = new mysqli($serverName, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed: ".$conn->connect_error);
    } else {
        echo "Connection Successful";
    }

    // SQL Query
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    // check number of row came from query resutl
    if ($result->num_rows > 0) {
        while ($student = $result->fetch_assoc()) {
            echo "<h1> Student {$student['sid']} </br></h1>";
            echo "Name: {$student['sname']} </br>";
            echo "Address: {$student['saddress']} </br>";
            echo "Phone: {$student['sphone']} </br>";
        }
    } else {
        echo "No result found";
    }

    // closing connection
    $conn->close();

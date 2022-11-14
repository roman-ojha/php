<?php

    /*
        *) MySQLi Error function:
            -> List are:
                1. mysqli_connect_error()
                    -> can ue this function to see error if came while connection
                2. mysqli_connect_errno()
                    -> return number of any array that happen when connecting to database
                3. mysqli_error()
                    -> can use if we want to see the error that is coming from msql query
                4. mysqli_error_list()
                    -> return array containing information about the error
    */

    // creating connection
    // mysqli_connect_error():
    $conn1 = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("<h1> Connection Error </h1>".mysqli_connect_error());

    // mysqli_connect_errno():
    $conn2 = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("<h1> Connection Error </h1>".mysqli_connect_errno());


    // query string
    $sql = "SELECT * FROM students";

    // mysqli_error():
    // $result = mysqli_query($conn1, $sql) or die("Query failed: ".mysqli_error($conn1));

    // mysqli_error_list():
    $result = mysqli_query($conn1, $sql);
    print_r(mysqli_error_list($conn1));

    if (mysqli_num_rows($result)) {
        while ($student = mysqli_fetch_assoc($result)) {
            echo "<h1> Student ".$student['sid']."</br></h1>";
            echo "Name: ".$student['sname']."</br>";
            echo "Address: ".$student['saddress']."</br>";
            echo "Phone: ".$student['sphone']."</br>";
        }
    }

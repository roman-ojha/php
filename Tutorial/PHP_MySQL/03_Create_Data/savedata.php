<?php

    // getting all the form data that we filled up in 'add.php' file
    $s_name= $_POST['sname'];
    $s_address=$_POST['saddress'];
    $s_class=$_POST['class'];
    $s_phone=$_POST['sphone'];

    echo $s_class;

    // creating database connection
    $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

    // insert sql
    $insert_sql="INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$s_name}','{$s_address}','{$s_class}','{$s_phone}')";
    $response=mysqli_query($conn, $insert_sql) or die("Query Unsuccessful");

    // after we save the data we want to get redirect to home page
    header("Location: http://localhost/php/Tutorial/PHP_MySQL/03_Create_Data/");
    // now this function will redirect to home page after we save the data to database

    // closing connection
    mysqli_close($conn);

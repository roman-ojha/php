<?php

    $s_name= $_POST['sname'];
    $s_address=$_POST['saddress'];
    $s_class=$_POST['class'];
    $s_phone=$_POST['sphone'];


    $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

    $insert_sql="INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$s_name}','{$s_address}','{$s_class}','{$s_phone}')";
    $response=mysqli_query($conn, $insert_sql) or die("Query Unsuccessful");

    header("Location: http://localhost/php/Tutorial/PHP_MySQL/04_Update_Data_01/");

    mysqli_close($conn);

<?php

    $s_name= $_POST['sname'];
    $s_address=$_POST['saddress'];
    $s_class=$_POST['class'];
    $s_phone=$_POST['sphone'];


    include './config.php';

    $insert_sql="INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$s_name}','{$s_address}','{$s_class}','{$s_phone}')";
    $response=mysqli_query($conn, $insert_sql) or die("Query Unsuccessful");

    header("Location: http://localhost/php/Tutorial/PHP_MySQL/05_Delete_Data/");

    mysqli_close($conn);

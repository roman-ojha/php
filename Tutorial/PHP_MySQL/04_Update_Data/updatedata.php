<?php

// updating data after we get the information about student using POST method

$s_id=$_POST['sid'];
$s_name= $_POST['sname'];
$s_address=$_POST['saddress'];
$s_class=$_POST['sclass'];
$s_phone=$_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

$update_sql="UPDATE students SET sname = '{$s_name}', saddress = '{$s_address}', sclass = '{$s_class}', sphone = '{$s_phone}' WHERE sid = {$s_id}";
$response=mysqli_query($conn, $update_sql) or die("Query Unsuccessful");

header("Location: http://localhost/php/Tutorial/PHP_MySQL/04_Update_Data/");

mysqli_close($conn);

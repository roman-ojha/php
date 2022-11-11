<?php

$sid=$_GET['id'];

// db connection
include './config.php';

$delete_student_sql="DELETE FROM students WHERE sid = {$sid}";
$response=mysqli_query($conn, $delete_student_sql) or die("Query Unsuccessful");

header("Location: http://localhost/php/Tutorial/PHP_MySQL/05_Delete_Data/");

mysqli_close($conn);

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'php_mysql_tutorial') or die('connection failed');

    $name = $_POST['sname'];
    echo "$name";
    $sql = "SELECT * FROM students";
    $response = mysqli_query($conn, $sql);

<?php

    // Getting id, because we are using jquery for delete logic we can access data like this, but for other we have access json data other way
    $sid = $_POST['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'php_mysql_tutorial') or die('connection failed');

    $sql = "DELETE FROM students WHERE sid = {$sid}";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }

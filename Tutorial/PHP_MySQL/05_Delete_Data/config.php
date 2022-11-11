<?php

    // rather then creating connection by passing argument into it in different file is not the good way to do things so we will rather create a common file where we will write the db connection
    $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

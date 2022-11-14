<?php

    /*
        *) MySQLi Affected Rows:
            -> this function will show use how many rows had been affected after we did a query.
    */
    $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

    $sql = "SELECT * FROM students WHERE sname = 'Roman Ojha'";

    $result = mysqli_query($conn, $sql) or die("Query failed");

    // sow here 'mysqli_affected_rows' will give use the number of rows that we are affecting from the '$sql' query
    // it could be 'SELECT', 'UPDATE', 'DELETE' query
    echo "Total Rows: ".mysqli_affected_rows($conn);

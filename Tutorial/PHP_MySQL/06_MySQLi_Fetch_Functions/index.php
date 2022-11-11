<?php

    /*
        *) MySQLi Fetch Functions:
            1. mysqli_fetch_assoc()
                -> return associative array
            2. mysqli_fetch_array()
                ->
            3. mysqli_fetch_row()
            4. mysqli_fetch_all()
            5. mysqli_fetch_field()
    */

    // database connection
    $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

    // query:
    $sql = "SELECT * FROM students";
    // =======================================================
    $response=mysqli_query($conn, $sql) or die("Query failed");
    // get the data from query result
    // mysqli_fetch_assoc(): fetch associative array
    $student = mysqli_fetch_assoc($response);
    // NOTE that this function will only give you the data of one field
    // for the first call it will give 0th index of the data, means first student from result query
    // now we have to access the value of student using it's key
    echo $student['sname'];
    echo "<pre><h1>";
    print_r($student);
    echo "</h1></pre>";
    /*
        Output:
            Array
            (
                [sid] => 10
                [sname] => Roman Ojha
                [saddress] => New Baneshwor
                [sclass] => 2
                [sphone] => 9843211234
            )
    */
    $student = mysqli_fetch_assoc($response);
    // for the second call it will given 1st index of the data, means second student

    // to fetch all the student we can use while loop
    while ($student=mysqli_fetch_assoc($response)) {
        echo "<pre><h1>";
        print_r($student);
        echo "</h1></pre>";
    }

    // ========================================================
    $response=mysqli_query($conn, $sql) or die("Query failed");
    // mysqli_fetch_row(): this will fetch first row from the query result but it will create a index array
    $row = mysqli_fetch_row($response);
    echo "<pre><h1>";
    print_r($row);
    echo "</h1></pre>";
    /*
        Output:
        Array
        (
            [0] => 10
            [1] => Roman Ojha
            [2] => New Baneshwor
            [3] => 2
            [4] => 9843211234
        )
    */
    while ($row=mysqli_fetch_row($response)) {
        echo "<pre><h1>";
        print_r($row);
        echo "</h1></pre>";
    }

    // ======================================================
    $response=mysqli_query($conn, $sql) or die("Query failed");
    // mysqli_fetch_array(): this will return associative array as well as index array
    $array = mysqli_fetch_array($response);
    echo "<pre><h1>";
    print_r($array);
    echo "</h1></pre>";
    /*
        Output:
        Array
        (
        [0] => 10
        [sid] => 10
        [1] => Roman Ojha
        [sname] => Roman Ojha
        [2] => New Baneshwor
        [saddress] => New Baneshwor
        [3] => 2
        [sclass] => 2
        [4] => 9843211234
        [sphone] => 9843211234
        )
    */
    // we can even give the second argument
    $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
    // 'MYSQLI_ASSOC': this will now return associative array only

    $array = mysqli_fetch_array($response, MYSQLI_NUM);
    // 'MYSQLI_NUM': this will now return index array only

    $array = mysqli_fetch_array($response, MYSQLI_BOTH);
    // 'MYSQLI_BOTH': this will now return both associative and index array

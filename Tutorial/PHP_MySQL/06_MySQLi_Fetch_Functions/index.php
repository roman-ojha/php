<?php

    /*
        *) MySQLi Fetch Functions:
            1. mysqli_fetch_assoc()
                -> return single field associative array
            2. mysqli_fetch_array()
                -> return single field both index & associative array
            3. mysqli_fetch_row()
                -> return single field index array
            4. mysqli_fetch_all()
                -> return all queried field multidimensional array
            5. mysqli_fetch_field()
                -> return stdClass Object containing information about column
                -> NOTE: this will now return array
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

    // ========================================================
    $response=mysqli_query($conn, $sql) or die("Query failed");
    // mysqli_fetch_all(): this will fetch all the possible result as multidimensional array
    // by default will return index array
    $students = mysqli_fetch_all($response, MYSQLI_ASSOC);
    echo "<pre><h1>";
    print_r($students);
    echo "</h1></pre>";
    /*
        Output:
        Array
        (
            [0] => Array
                (
                    [0] => 10
                    [1] => Roman Ojha
                    [2] => New Baneshwor
                    [3] => 2
                    [4] => 9843211234
                )

            [1] => Array
                (
                    [0] => 11
                    [1] => Razz
                    [2] => nepal
                    [3] => 3
                    [4] => 898743212
                )

        )
    */
    // access fetched data
    foreach ($students as $student) {
        echo "<pre><h1>";
        print_r($student);
        echo "</h1></pre>";
    }

    // =======================================================
    $response=mysqli_query($conn, $sql) or die("Query failed");
    // 'mysqli_fetch_field()' : fetch information about the column
    // return stdClass Object containing information about column
    // NOTE: this will now return array
    $field = mysqli_fetch_field($response);
    // this will return the information about the first column
    echo "<pre><h1>";
    print_r($field);
    echo "</h1></pre>";
    /*
        Output:
        stdClass Object
        (
            [name] => sid
            [orgname] => sid
            [table] => students
            [orgtable] => students
            [def] =>
            [db] => php_mysql_tutorial
            [catalog] => def
            [max_length] => 0
            [length] => 10
            [charsetnr] => 63
            [flags] => 49667
            [type] => 3
            [decimals] => 0
        )
    */

    // get all the column information
    while ($field=mysqli_fetch_field($response)) {
        // now while accessing these field value we can't be able we use [''] to access value
        // because 'mysqli_fetch_field()' doesn't return array, but return object
        // so we have to use -> key to access value
        echo "<h1> $field->name </h1>";
    }

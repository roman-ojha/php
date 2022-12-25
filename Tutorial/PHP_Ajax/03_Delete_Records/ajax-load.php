<?php

    // first we will create database connection
    $conn = mysqli_connect('localhost', 'root', '', 'php_mysql_tutorial') or die('connection failed');

    // query
    $sql = "SELECT * FROM students";
    $response = mysqli_query($conn, $sql);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax-load</title>
</head>
<body>
    <table border="1px" id="table">
        <tr>
            <th class="id">Id</th>
            <th class="name">Name</th>
        </tr>
        <?php
        if (mysqli_num_rows($response) > 0) {
            while ($student = mysqli_fetch_assoc($response)) {
                ?> 
            <tr>
                <td class='id'><?php echo $student['sid'] ?></td>
                <td class='name'><?php echo $student['sname'] ?></td>
            </tr>
        <?php
            }
            ?>
    </table>
    <?php
        } else {
            echo "<h2>No record found</h2>";
        }
    // closing connection
    mysqli_close($conn);
    ?>
</body>
</html>

<?php

    // we are requesting to this file when we will click the button Load Data

    // first we will create database connection
    $conn = mysqli_connect('localhost', 'root', '', 'php_mysql_tutorial') or die('connection failed');

    // query
    $sql = "SELECT * FROM students";
    $response = mysqli_query($conn, $sql);

    $output;
    // we can output html element like this as well
    if (mysqli_num_rows($response) > 0) {
        // now here we will response html output string
        // $output = '
        //     <table border="1px" id="table">
        //         <tr>
        //             <th class="id">Id</th>
        //             <th class="name">Name</th>
        //         </tr>
        // ';
        // while ($student = mysqli_fetch_assoc($response)) {
        //     $output .= "
        //         <tr>
        //             <td class='id'>{$student['sid']}</td>
        //             <td class='name'>{$student['sname']}</td>
        //         </tr>
        //     ";
        // }
        // $output = $output."</table>";
        // echo $output;
    } else {
        // echo "<h2>No record found</h2>";
    }
    // NOTE: we when 'index.php' file request for this file then this file will render the html file which will get response to the 'index.php' file fetch api as text

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
            // now here we will response html output string
            while ($student = mysqli_fetch_assoc($response)) {
                ?> 
            <tr>
                <td class='id'><?php echo $student['sid'] ?></td>
                <td class='name'><?php echo $student['sname'] ?></td>
            </tr>
        <?php

            // $output = $output."</table>";
            // when we will echo this output here then after requesting from 'index.php' using ajax this output will goes as a response
            // echo $output;
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

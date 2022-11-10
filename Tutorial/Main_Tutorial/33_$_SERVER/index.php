<?php

    /*
        *) $_Server
            -> Using this Variable we can get the Information related to:
                -> HTTP connection
                -> Server information
                -> HOST Information
                -> URL Information
            -> we had discuss about this in 'server_variable.php' file
    */
    // -> Here we will also see how we can access all the data from form tag into same php file and also we can save that data into database
    // -> and we will also see hwo we can make Conditional page content

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- if you want to access form data into this same file then we will going add script in action attribute -->
    <form action="<?php
    echo $_SERVER['PHP_SELF']
    // '$_SERVER['PHP_SELF']' will give the path where this file exist
    // here whenever user click the 'submit' button we want to get redirect to the same page
    ?>" method="POST">
        Name: <input type="text" name="fname"/><br/>
        Age: <input type="number" name="age"/><br/>
        <input type="submit" name="save"/>
    </form> 

    <?php
        // we want this script to get run then ever use submit the button
        if (isset($_POST['save'])) {
            // 'save' is the name of 'submit' button
            // so whenever 'save' button get set then we want this condition to get run

            // we can access the data using name of the form input tag
            echo $_POST['fname'];
            echo $_POST['age'];
        }

    ?>
</body>
</html>

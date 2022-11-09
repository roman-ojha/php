<?php

    /*
        *) Super Global Variables
            => Whenever we want to access one php file variable into another php file variable in that case we have to use Super Global Variables
            -> Variables are:
                1. $_GET
                    -> this variable can be use for html forms
                2. $_POST
                    -> this variable can be use for html forms
                3. $_REQUEST
                4. $_SERVER
                5. $_SESSION
                6. $_COOKIE
                7. $_FILES
    */
    ?>

<!-- so here now we will going to create html document and inside it we will create a simple form where use can enter 'Name' & 'age' and can submit that data -->
<!-- after use submit that data we will try to access that data into another file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <!-- now after use submit the data we have to perform some action for now we will going to put the php file name where we want the data to get accessed -->
    <!-- Method 'GET' & '$_GET' Variable-->
    <h1> GET Method </h1>
    <form action="get_variable.php" method="GET">
        <!-- now after use submit the data all the data that use enter will get into 'data.php' file -->
        Name: <input type="text" name="fname"/><br/>
        Age: <input type="number" name="age"/><br/>
        <input type="submit" name="save"/>
        <!-- after we submit the form:
            -> <>/data.php?fname=RAZZ&age=31&save=Submit    
        -->
    </form> 

    <!-- Method 'POST' & '$_POST' Variable -->
    <h1> POST Method </h1>
    <form action="post_variable.php" method="POST">
        Name: <input type="text" name="fname"/><br/>
        Age: <input type="number" name="age"/><br/>
        <input type="submit" name="save"/>
    </form> 

    <h1> $_REQUEST Variable </h1>
    <form action="request_variable.php" method="POST">
        Name: <input type="text" name="fname"/><br/>
        Age: <input type="number" name="age"/><br/>
        <input type="submit" name="save"/>
    </form> 
</body>
</html>

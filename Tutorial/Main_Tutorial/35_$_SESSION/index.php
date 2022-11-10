<?php

    /*
        *) Session:
            -> as we know In Cookie we will store the temporary information into Client Site
            -> But in case of Session we will store the temporary information into Server
            -> and it is called as Session Store
            -> Maximum time we will use this Session on Authentication system
            => To create Session:
                step 1: session_start();
                        -> firstly we have to start the session
                step 2: $_SESSION[name]=value;
                        -> create session after session get started
                step 3: echo $_SESSION[name];
                        -> get session value

            => To delete session:
                step 1: session_unset();
                        -> remove all session variables
                step 2: session_destroy();
                        -> destroy started session
    */

    // step 1: starting session
    session_start();

    // step 2: create new session or change the value of existing session key
    $_SESSION["name"]="Roman";

    // step 3: get session value
    echo $_SESSION["name"];
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    // deleting session variables
    // step 1: remove all started session variables
    session_unset();

    // step 2: destroy started session
    session_destroy();

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
   <?php
        // accessing session value on html page

        // first we will check does required session value exist or not
        if (isset($_SESSION["name"])) {
            echo $_SESSION["name"];
        }
    ?>
</body>
</html>

<?php

    /*
        *) Cookies:
            -> Temporary information in visitor computer
            -> Tow step:
                1. Create Cookie:
                    -> setcookie(<name>,<value>,<expire>,<path>,<domain>,<secure>,<httponly>)
                    -> <name>: name of the cookie
                    -> <expire>: expire time in terms of second
                    -> <path>:
                        -> '/' -> if you want to access cookie from all the pages
                        -> '/<path_name>' -> if you wan to access that cookie from specific page
                    -> <domain>:
                        -> can only access that cookie from that domain and from that subdomain
                        -> if we pass subdomain argument while creating the cookie then we can only access that cookie from that specific subdomain
                    -> <secure>:
                        -> Value: True | False
                        -> If(True): then cookie can only get set when we are using secure protocol like 'https'
                        -> If(False): it will set the cookie with out checking for secure or unsecure protocol,
                    -> <httponly>:
                        -> Value: True | False
                        -> If(True): can only access that set cookie from server side, and can't be able to access it from client site
                        -> If(False): can access it from client side scripting language as well
                2. Access Cookie:
                    -> $_COOKIE[<name>]
    */

    $cookie_name="User";
    $cookie_value="Roman";

    // setting cookie
    setcookie($cookie_name, $cookie_value, time() + (86400), '/');


    // NOTE: we will delete the cookie name 'User' whenever we will go to 'delete_cookie.php' page

    // IMPORTANT NOTE: https://youtu.be/QfKFijweO64?list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&t=915

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
    // If the user add disable to set the cookie from you site then you will not be able to set the cookie and access it
    // so while accessing the cookie it might will throw an error
    // to solve this problem we will check is cookie had been set or not
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie is not been set";
    } else {
        // accessing Cookie value
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>

<?php
include "database.php";
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = $_POST['number'];
    $gender = "";
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
    $city = $_POST['city'];
    // validate name
    if (preg_match("/^[a-zA-Z]*$/", $name)) {
        // validate number
        if (preg_match("/^98[0-9]{8}$/", $number)) {
            // validate email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // validate gender
                if ($gender == "male" || $gender == "female") {
                    echo "valid gender";
                    // validate city
                    if (strlen($city) > 0) {
                        echo "valid city";
                    } else {
                        echo "Not a valid city...<br/>";
                    }
                } else {
                    echo "Not a valid gender...<br/>";
                }
            } else {
                echo "Not a valid email...<br/>";
            }
        } else {
            echo "Not a valid number...<br/>";
        }
    } else {
        echo "Not a valid name...<br/>";
    }
}

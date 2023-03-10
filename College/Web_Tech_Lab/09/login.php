<?php
$conn = mysqli_connect("localhost", "root", "", "WebTech");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM Student WHERE email='{$email}'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $student = mysqli_fetch_assoc($res);
            if ($password != $student['password']) {
                echo "Email & password doesn't match";
            } else {
                setcookie("email", $email);
                header("Location: home.php");
            }
        } else {
            echo "User doesn't exist";
        }
    }
}

<?php
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
    $conn = mysqli_connect("localhost", "root", "", "WebTech");
    $query = "SELECT * FROM Student WHERE email='{$email}'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        if (mysqli_num_rows($res) == 0) {
            echo "Please login first";
        } else {
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
                <center>
                    <h1>Create new Student</h1>
                    <a href="userInfo.php">UserInfo</a>
                    <form action="newUser.php" method="POST">
                        <label for="first_name">FirstName</label>
                        <input type="text" id="first_name" name="first_name" />
                        <br />
                        <label for="last_name">LastName</label>
                        <input type="text" id="last_name" name="last_name" />
                        <br />
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" />
                        <br />
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" />
                        <br />
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" />
                        <br />
                        <input type="submit" value="Create User" name="create">
                    </form>
                </center>
            </body>

            </html>
<?php
        }
    }
}
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "WebTech");
    $query = "SELECT * FROM Student WHERE id='{$id}'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $student = mysqli_fetch_assoc($res);
?>
            <form action="update.php" method="POST">
                <input hidden type="number" name="id" value="<?php echo $id ?>">
                <label for="first_name">FirstName</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo $student['first_name'] ?>" />
                <br />
                <label for="last_name">LastName</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $student['last_name'] ?>" />
                <br />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $student['email'] ?>" />
                <br />
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?php echo $student['address'] ?>" />
                <br />
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $student['password'] ?>" />
                <br />
                <input type="submit" value="Update" name="update">
            </form>
    <?php
        }
    } else {
        echo "Error while deleting data";
    }
    ?>

<?php
} else if (isset($_POST['update'])) {
    $conn = mysqli_connect("localhost", "root", "", "WebTech");
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $query = "SELECT * FROM student WHERE id={$id}";
    $res = mysqli_query($conn, $query);
    if (mysqli_num_rows($res) != 0) {
        $query = "UPDATE student SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', address='{$address}', password='{$password}' WHERE id={$id}";
        if (mysqli_query($conn, $query)) {
            header("Location: userinfo.php");
        } else {
            echo "Error while updating data";
        }
    }
}
?>
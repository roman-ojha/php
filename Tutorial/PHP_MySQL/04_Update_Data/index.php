<?php
include 'header.php';


?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");


$sql = "SELECT * FROM students JOIN students_class WHERE students.sclass = students_class.cid";
$students = mysqli_query($conn, $sql) or die("Query Unsuccessful");

if (mysqli_num_rows($students)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while ($student=mysqli_fetch_assoc($students)) {
                    ?>
            <tr>
                <td><?php echo $student['sid'] ?></td>
                <td><?php echo $student['sname'] ?></td>
                <td><?php echo $student['saddress'] ?></td>
                <td><?php echo $student['cname'] ?></td>
                <td><?php echo $student['sphone'] ?></td>
                <td>
                    <!-- to be able to edit the user after clicking this link first we have to show user information on that 'edit.php' page for that we have to pass the student id on link -->
                    <a href='edit.php?id=<?php echo $student['sid'] ?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php } else {
        echo "<h2>No Record Found</h2>";
    }

mysqli_close($conn);
?>
</div>
</div>
</body>
</html>


<?php
include 'header.php';


?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        // Step 1: Create connection
        // mysqli_connect(<server_name>,<user_name>,<password>,<database_name>);
        $conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");


// Step 2: Run SQL Query
// mysqli_query(<connection_name>,<SQL_Query>);

// we will create sql query string to access students and it's class using JOIN operation
$sql = "SELECT * FROM students JOIN students_class WHERE students.sclass = students_class.cid";
$students = mysqli_query($conn, $sql) or die("Query Unsuccessful");

// we will check how many rows we get from sql query
if (mysqli_num_rows($students)>0) {
    // if row getter then 0

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
                // now here we will create loop to show all the students data that we get from query
                while ($student=mysqli_fetch_assoc($students)) {
                    // assoc means associative array
                    // and we will going to assign single student information into '$student'
                    ?>
            <tr>
                <!-- show the fetched data -->
                <td><?php echo $student['sid'] ?></td>
                <td><?php echo $student['sname'] ?></td>
                <td><?php echo $student['saddress'] ?></td>
                <td><?php echo $student['cname'] ?></td>
                <td><?php echo $student['sphone'] ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php }?>
    <!-- close the if statement bracket -->
        </tbody>
    </table>
    <!-- now here we will close the if statement bracket -->
    <?php } else {
        // if there doesn't exist any single record in database
        echo "<h2>No Record Found</h2>";
    }

// Step 3: Close connection
// mysqli_close(<connection_name>);
// now after access the data and read and dynamically shows data to web page now we have to close the database connection
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>


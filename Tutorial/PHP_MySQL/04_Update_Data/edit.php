<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    // getting the id of the student to get information from the database
        $sid=$_GET['id'];

// creating Database connection
$conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

// Query to get student with sid
$get_students_sql = "SELECT * FROM students WHERE sid = {$sid}";
$students = mysqli_query($conn, $get_students_sql) or die("Query Unsuccessful");

if (mysqli_num_rows($students)>0) {
    // now we will get the first index information from list of student array
    $student=mysqli_fetch_assoc($students);
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value=""/>
          <input type="text" name="sname" value="<?php echo $student['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $student['saddress'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass" value="3" >
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $student['sphone'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
} else {
    echo "<h1>Student Not Found</h1>";
}
?>
</div>
</div>
</body>
</html>

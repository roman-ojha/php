<?php include 'header.php';
// here first we will get the student information using id
// and that we will show that information value into form
// then we will given the user to update that information

$conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php
    $_SERVER['PHP_SELF'];
// we will get the student information in same file
?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
        // first we will check does 'showbtn' submit button is been clicked or not
        if (isset($_POST['showbtn'])) {
            // now here we will get the 'sid' from input form
            $sid=$_POST['sid'];

            // now we will query it to get the student information
            $get_students_sql = "SELECT * FROM students WHERE sid = {$sid}";
            $students = mysqli_query($conn, $get_students_sql) or die("Query Unsuccessful");
            // print_r(mysqli_fetch_assoc($students));
            if (mysqli_num_rows($students)>0) {
                // so if student exist then
                $student=mysqli_fetch_assoc($students);
                ?>
                <!-- we will show the update form after we get the sid from the user -->
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
          <input type="hidden" name="sid" value="<?php echo $student['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $student['sname']; ?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $student['saddress'] ?>"/>
        </div>
        <div class="form-group">
        <label>Class</label>
          <?php
    $get_class_sql = "SELECT * FROM students_class";
                $classes = mysqli_query($conn, $get_class_sql) or die("Query Unsuccessful");
                ?>
          <select name="sclass" value="3" >
              <option value="" disabled>Select Class</option>
              <?php
                  if (mysqli_num_rows($classes)>0) {
                      while ($class=mysqli_fetch_assoc($classes)) {
                          ?>
              <option <?php if ($class['cid']==$student['sclass']) {
                  echo 'selected';
              } ?> value="<?php echo $class['cid'] ?>"><?php echo $class['cname'] ?></option>
              <?php
                      }
                  }
                ?>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $student['sphone'] ?>"/>
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
<?php
            } else {
                echo "<h1>Student Does not exist</h1>";
            }
        }
?>
</div>
</div>
</body>
</html>

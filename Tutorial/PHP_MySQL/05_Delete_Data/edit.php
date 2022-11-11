<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $sid=$_GET['id'];

include './config.php';

$get_students_sql = "SELECT * FROM students WHERE sid = {$sid}";
$students = mysqli_query($conn, $get_students_sql) or die("Query Unsuccessful");

if (mysqli_num_rows($students)>0) {
    $student=mysqli_fetch_assoc($students);
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
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
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
} else {
    echo "<h1>Student Not Found</h1>";
}
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>

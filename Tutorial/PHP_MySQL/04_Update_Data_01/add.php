<?php include 'header.php';

$conn = mysqli_connect("localhost", "root", "", "php_mysql_tutorial") or die("database connection failed");

$classes=mysqli_query($conn, "SELECT * FROM students_class");


?>
<div id="main-content">
    <h2>Add New Record</h2>
    <?php
    if (mysqli_num_rows($classes)>0) {
        ?>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                while ($class=mysqli_fetch_assoc($classes)) {
                    ?>
                <option value="<?php echo $class['cid'];?>"><?php echo $class['cname']; ?></option>
                <?php } ?>
            </select>
        </div>
        <?php }?>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>

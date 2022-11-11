<?php include 'header.php';

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php
    echo $_SERVER['PHP_SELF'];
?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php

if (isset($_POST['deletebtn'])) {
    $sid=$_POST['sid'];
    include './config.php';

    // first let me check doest given id exist of not
    $get_student_sql="SELECT * FROM students WHERE sid = {$sid}";
    $student=mysqli_query($conn, $get_student_sql);
    if (!mysqli_fetch_assoc($student)) {
        echo "<h1>Given student Id doesn't exist</h1>";
    } else {
        // if exist then we will delete
        $delete_student_sql="DELETE FROM students WHERE sid = {$sid}";
        $response=mysqli_query($conn, $delete_student_sql) or die("Query Unsuccessful");
        header("Location: http://localhost/php/Tutorial/PHP_MySQL/05_Delete_Data/");
    }

    mysqli_close($conn);
}
?>
</div>
</div>
</body>
</html>

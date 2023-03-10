<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = mysqli_connect("localhost","root","","WebTech");
        $query = "DELETE FROM Student WHERE id = '{$id}'";
        $res = mysqli_query($conn,$query);
        if($res){
            header("Location: userInfo.php");
        }
        else{
            echo "Error while deleting data";
        }
    };
?>
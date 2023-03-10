<?php
    $conn = mysqli_connect("localhost","root","");
    $query = "CREATE DATABASE `WebTech`";
    
    if(mysqli_connect_error()){
        echo "Connection error<br/>";
    }else{
        if(mysqli_query($conn,$query)){
            echo "Database created successfully<br/>";
        }else{
            echo "Error occure while creating database<br/>";
        }
    }
?>

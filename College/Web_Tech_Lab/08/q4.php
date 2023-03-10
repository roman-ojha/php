<?php
    $conn = mysqli_connect("localhost","root","","WebTech");
    $query = "CREATE TABLE Student(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        address VARCHAR(50),
        password VARCHAR(50)
    );
    ";
    
    if(mysqli_connect_error()){
        echo "Connection error<br/>";
    }else{
        if(mysqli_query($conn,$query)){
            echo "Created TAble Student successfully<br/>";
        }else{
            echo "Error occure while creating Table or Table might had already created<br/>";
        }
    }
?>
<?php
    $conn = mysqli_connect("localhost","root","","WebTech");
    $query = "INSERT INTO Student(first_name, last_name, email, address, password) VALUES('roman','ojha','roman@gmail.com','kathmandu','helloworld');";
    
    if(mysqli_connect_error()){
        echo "Connection error<br/>";
    }else{
        if(mysqli_query($conn,$query)){
            echo "Insert data successfully<br/>";
        }else{
            echo "Error occure while inserting data<br/>";
        }
    }
?>
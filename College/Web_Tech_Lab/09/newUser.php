<?php
    if(isset($_POST['create'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $conn = mysqli_connect("localhost","root","","WebTech");
        $query = "INSERT INTO Student(first_name, last_name, email, address, password) VALUES('{$first_name}','{$last_name}','{$email}','{$address}','{$password}');";
        if(mysqli_connect_error()){
            echo "Connection error<br/>";
        }else{
            if(mysqli_query($conn,$query)){
                echo "Insert data successfully<br/>";
                echo "View Students: <a href='userInfo.php'>UserInfo</a>";
            }else{
                echo "Error occure while inserting data<br/>";
            }
        }
    }

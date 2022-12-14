<?php
include 'header.php';

/*
    *) Introduction:
        => when we want to work with PHP and MySQL then first we have to follow these three steps:
            -> Step 1: Create connection between PHP and MySQL
            -> Step 2: After connection get successful we will run SQL Query
            -> Step 3: Close connection

        => To work with PHP and MySQL we have three different kind of methods:
            1. MySQLi Procedural
                -> all bellow function will come under it
                -> mysqli_connect()
                -> mysqli_query()
                -> mysqli_close()
            2. MySQLi Object-oriented
                -> we will learn about this on OOPs with PHP tutorial
            3. PDO
                -> most secure methods then above 2 types of methods

    *) Setup:
        => For this project we will going to download already created html template from :
            -> https://www.yahoobaba.net/project/html-crud
        => now we will start MySQL server
        -> now create database 'php_MySQL_tutorial'
        -> and create table name 'students':
            -> create table students(
                sid INT NOT NULL AUTO_INCREMENT,
                sname VARCHAR(30) NOT NULL,
                saddress VARCHAR(100) NOT NULL,
                sclass INT NOT NULL,
                sphone VARCHAR(10) NOT NULL,
                PRIMARY KEY (sid)
            )
            -> create table students_class(
                cid INT NOT NULL AUTO_INCREMENT,
                cname VARCHAR(15) NOT NULL,
                PRIMARY KEY (cid)
            )
        -> insert some value:
                -> INSERT INTO `students_class` (`cid`, `cname`) VALUES (NULL, 'BCA'), (NULL, 'Btech'), (NULL, 'Bsc'), (NULL, 'Bcom');
                -> INSERT INTO `students` (`sid`, `sname`, `saddress`, `sclass`, `sphone`) VALUES (NULL, 'Roman', 'nepal', '3', '9832143212'), (NULL, 'Razz', 'kathmandu', '2', '9864323454');
*/

// Step 1: Create connection
// mysqli_connect(<server_name>,<user_name>,<password>,<database_name>);

// Step 2: Run SQL Query
// mysqli_query(<connection_name>,<SQL_Query>);

// Step 3: Close connection
// mysqli_close(<connection_name>);

?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ramesh</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Punjab</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Suresh</td>
                <td>Haryana</td>
                <td>BSC</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Krishna</td>
                <td>Gujrat</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rohit</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</body>
</html>


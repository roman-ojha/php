<?php
class Database
{
    public $host = "localhost";
    public $name = "php_mysql_tutorial";
    public $username = "root";
    private $password = "";

    public mysqli $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->name);

        try {
            $this->conn->query("SELECT * FROM User WHERE id = 1");
        } catch (Exception $err) {
        }
        if ($this->conn->errno == 1146) {
            $this->conn->query("CREATE TABLE User(
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                gender VARCHAR(10) NOT NULL,
                ph_no INT(15) NOT NULL,
                city VARCHAR(50) NOT NULL
            );");
        }
    }
}

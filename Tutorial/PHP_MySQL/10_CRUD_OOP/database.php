<?php

    class Database
    {
        // create private variable to connect to db
        private $db_host;
        private $db_user;
        private $db_password;
        private $db_name;

        private $conn = false;

        // connection variable
        private $mysqli = null;

        // store error or query result
        private $result = array();

        public function __construct($host, $user, $password, $name)
        {
            $this->db_host = $host;
            $this->db_user = $user;
            $this->db_password = $password;
            $this->db_name = $name;
            // create connection:
            // first we will see doest database connection is already establish or not
            if (!$this->conn) {
                $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);

                if ($this->mysqli->connect_error) {
                    // if error occur
                    echo "Database connection error";

                    // storing error into '$this->result'
                    array_push($this->result, $this->mysqli->connect_error);
                    return false;
                } else {
                    $this->conn = true;
                    echo "Database connection successfully";
                    return true;
                }
            } else {
                // if we already had connection
                echo "Database is connected already";
                return true;
            }
        }

        // Function to insert into the database
        public function insert()
        {
        }

        // Function to update row into the database
        public function update()
        {
        }

        // Function to delete table or row(s) from database
        public function delete()
        {
        }

        // function to read table from database
        public function select()
        {
        }

        public function __destruct()
        {
            // closing connection
            if ($this->conn) {
                // connection is still established then we will close
                if ($this->mysqli->close()) {
                    // if we successfully close the connection then we will set '$conn' as false
                    $this->conn = false;
                    // and we will also return true
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

<?php

    class Database
    {
        private $db_host;
        private $db_user;
        private $db_password;
        private $db_name;

        private $conn = false;
        private $mysqli = '';
        private $result = array();


        public function __construct($host, $user, $password, $name)
        {
            $this->db_host = $host;
            $this->db_user = $user;
            $this->db_password = $password;
            $this->db_name = $name;
            if (!$this->conn) {
                $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);

                if ($this->mysqli->connect_error) {
                    echo "Database connection error";
                    array_push($this->result, $this->mysqli->connect_error);
                    return false;
                } else {
                    $this->conn = true;
                    echo "Database connection successfully";
                    return true;
                }
            } else {
                echo "Database is connected already";
                return true;
            }
        }

        // Function to insert into the database
        public function insert(string $table, array $params = array())
        {
            // we will take as parameter:
            // 1. table name
            // 2. value as array

            // doest table exist that user send
            if ($this->isTableExist($table)) {
                // if exist then we will insert that into database

                // first we will extract all the table column name from $params and convert into string
                $table_columns = implode(',', array_keys($params));

                // and then we will extract all the table column value from $params
                $table_values = implode("','", $params);

                $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
            // Ex: INSERT INTO students (sname,saddress,sclass,sphone) VALUE ('Thor','LA','1','9878332212')

            // if($this->mysqli->query($sql)){
                //     // if query run successfully

                //     // we will push the result id
                //     array_push($this->result,$this->mysqli->insert_id);
                //     return true;
            // }else{
                //     // if query fail

                //     array_push($this->result,$this->mysqli->error);
                //     return false;
            // }
            } else {
                // if not exist
                return false;
            }
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


        private function isTableExist(string $table)
        {
            // this function will check does given table exist in database or not
            $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
            $tableInDb = $this->mysqli->query($sql);
            if ($tableInDb) {
                if ($tableInDb->num_rows == 1) {
                    // if it find out one table
                    return true;
                }
            } else {
                // so if give table did not exist the we will push the error into '$result'
                array_push($this->result, $table." doesn't exist");
                return false;
            }
        }

        // Function to show $result
        public function getResult(): array
        {
            $val = $this->result;

            // empty the array
            $this->result = array();
            // then we will return the array
            return $val;
        }

        public function __destruct()
        {
            if ($this->conn) {
                if ($this->mysqli->close()) {
                    $this->conn = false;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

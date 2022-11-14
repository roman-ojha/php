<?php

    include './student.php';

    class Database
    {
        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_password = '';
        private $db_name = 'php_mysql_tutorial';

        private $conn = false;
        private ?mysqli $mysqli = null;
        private $result = array();


        public function __construct()
        {
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
        public function insert(string $table, object $params): bool
        {
            $paramsArray = get_object_vars($params);
            if ($this->isTableExist($table)) {
                $table_columns = implode(',', array_keys($paramsArray));
                $table_values = implode("','", $paramsArray);
                $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
                if ($this->mysqli->query($sql)) {
                    array_push($this->result, $this->mysqli->insert_id);
                    return true;
                } else {
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            } else {
                return false;
            }
        }

        // Function to update row into the database
        public function update(string $table, object $params, string $where = null): bool
        {
            $paramsArr = get_object_vars($params);
            if ($this->isTableExist($table)) {
                $args = array();
                foreach ($paramsArr as $key => $value) {
                    $args[] = "$key = '$value'";
                }
                $sql = "UPDATE $table SET ".implode(' , ', $args);
                if ($where != null) {
                    $sql .= " WHERE $where";
                }
                if ($this->mysqli->query($sql)) {
                    array_push($this->result, $this->mysqli->affected_rows);
                    return true;
                } else {
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
                return true;
            } else {
                return false;
            }
        }

        // Function to delete table or row(s) from database
        public function delete(string $table, string $where = null): bool
        {
            // we will take as parameter:
            // 1. table name to update
            // 2. where clause (optional)
            if ($this->isTableExist($table)) {
                $sql = "DELETE FROM $table";
                // condition to add where clause
                if ($where != null) {
                    $sql .= " WHERE $where";
                }
                // $sql EX:
                // DELETE FROM students WHERE sid = '3'
                if ($this->mysqli->query($sql)) {
                    array_push($this->result, $this->mysqli->affected_rows);
                    return true;
                } else {
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
                return true;
            } else {
                return false;
            }
        }

        // function to read table from database
        public function select()
        {
        }


        // return all table name from the database
        public function getTables(): array
        {
            $sql = "SHOW TABLES";
            $response = $this->mysqli->query($sql);
            $tables = array();
            while ($table = $response->fetch_assoc()) {
                array_push($tables, $table["Tables_in_$this->db_name"]);
            }
            return $tables;
        }

        // Function to check does given table exist in database or not
        private function isTableExist(string $table): bool
        {
            $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
            $tableInDb = $this->mysqli->query($sql);
            if ($tableInDb) {
                if ($tableInDb->num_rows == 1) {
                    return true;
                }
            } else {
                array_push($this->result, $table." doesn't exist");
                return false;
            }
        }

        // Function to show $result
        public function getResult(): array
        {
            $val = $this->result;

            $this->result = array();
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

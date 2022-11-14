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
            if ($this->isTableExist($table)) {
                $sql = "DELETE FROM $table";
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

        // function to read table from database
        public function select(string $table, string $columns = '*', string $join = null, string $where = null, string $order = null, string $limit = null)
        {
            // we will take as parameter:
            // 1. $table :table name to update
            // 2. $columns : specific column that you want to select
            // 3. $join : join operation
            // 4. $where : where clause
            // 5. $order : order by
            // 6. $limit : to add limit to select

            if ($this->isTableExist($table)) {
                // basic SQL
                $sql = "SELECT $columns FROM $table";

                // for join
                if ($join != null) {
                    // if join exist
                    $sql .= " JOIN $join";
                }
                if ($where != null) {
                    // if where exist
                    $sql .= " WHERE $where";
                }
                if ($order != null) {
                    // if order exist
                    $sql .= " ORDER BY $order";
                }
                if ($limit != null) {
                    // if join exist
                    $sql .= " LIMIT 0, $limit";
                }
                echo $sql;
                // $sql EX:
                // SELECT * FROM students WHERE sid > 12 ORDER BY sid LIMIT 0, 2
                $response = $this->mysqli->query($sql);
                if ($response) {
                    // if query run successfully then we will store the result in array
                    array_push($this->result, $response->fetch_all(MYSQLI_ASSOC));
                    return true;
                } else {
                    array_push($this->result, $this->mysqli->error);
                    return false;
                }
            } else {
                return false;
            }
        }

        // function which takes sql string command to query
        public function sql(string $sql)
        {
            $response = $this->mysqli->query($sql);
            if ($response) {
                // if query run successfully then we will store the result in array
                array_push($this->result, $response->fetch_all(MYSQLI_ASSOC));
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
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

<?php

class Database {

    private $db_host = "localhost";
    private $db_name = "api_crud";
    private $db_user = "root";
    private $db_pass = "";

    public function __construct() {

        try {

            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8";
            $database_connection = new PDO($dsn, $this->db_user, $this->db_pass);
            $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $database_connection;
        } catch (PDOException $e) {

            echo "Database connection error: " . $e->getMessage();
            exit();
        }

    }
}
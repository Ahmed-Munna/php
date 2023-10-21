<?php

class Database {

    private $db_host = "localhost";
    private $db_name = "crud_api";
    private $db_user_name = "root";
    private $db_pass = "";

    function __construct() {

        try { 
            
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8";
            $db_connection = new PDO($dsn, $this->db_user_name, $this->db_pass);
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db_connection;

        } catch (PDOException $e) { 

            echo "Connection error " . $e->getMessage();
            exit();
        }
    }
}

print_r(new Database);















<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'task-manager');
class config {
    
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    public function __construct() {
        $this->dbConnect();
    }

    public function dbConnect() {
        try {
            mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) {
            echo $e;
        }
    }

}
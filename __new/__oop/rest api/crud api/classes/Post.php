<?php

require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/Main.php";

use Main as Response;

class Post extends Database {

    private $DB;

    public function __construct() {

        $this->DB = Database::__construct();
    }

    
}
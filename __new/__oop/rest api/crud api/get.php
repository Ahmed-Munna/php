<?php
$allow_method = "GET";

require_once __DIR__ . "/config.php";

use Main as Request;

if (Request::check($_SERVER["REQUEST_METHOD"])) {

    $data = json_decode(file_get_contents("php://input"));
    $Post = new Post();
    $Post->read($data->request);
    
}
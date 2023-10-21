<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: $allow_method");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Access-Control-Allow-Headers, X-Requested-Width");

require_once __DIR__ . "/classes/Main.php";
require_once __DIR__ . "/classes/Post.php";

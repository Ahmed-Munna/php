<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","api_crud");

$conn = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );

$preStatment = $conn->prepare("SELECT * FROM users WHERE name = ?");

$name = 'kamal';
$preStatment->bind_param('s', $name );
$preStatment->execute();

print_r($preStatment->get_result()->fetch_assoc());

$preStatment->close();

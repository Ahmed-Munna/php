<?php

$json = json_encode([
    "name"=> "Munna",
    "email" => "munna@mail.com",
    "password" => "123456",
]);
$op = fopen("all-file/aaa.json", "w");
echo fwrite($op, $json);
<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With");

include("config.php");

$getFromTheUserJsonInfo = json_decode(file_get_contents("php://input"), true);
$userId = $getFromTheUserJsonInfo["id"];
$userName = $getFromTheUserJsonInfo["name"];
$userPhone = $getFromTheUserJsonInfo["phone"];
$userAddress = $getFromTheUserJsonInfo["address"];

$sqlQuery = "UPDATE users SET name = '{$userName}', phone = '{$userPhone}', address = '{$userAddress}' WHERE id = '{$userId}'";

if (mysqli_query($db_conn, $sqlQuery)) {

    echo json_encode(["massege" => "Update Successfull", "status" => true]);
} else { 
    
    echo json_encode(["massege" => "Update Failed!", "status" => false]);
}
<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With");

include("config.php");

$getFromTheUserJsonInfo = json_decode(file_get_contents("php://input"), true);
$userName = $getFromTheUserJsonInfo["name"];
$userPhone = $getFromTheUserJsonInfo["phone"];
$userAddress = $getFromTheUserJsonInfo["address"];

$sqlQuery = "INSERT  INTO users (name, phone, address)  VALUES ('{$userName}', '{$userPhone}', '{$userAddress}')";

if ($getFromTheUserJsonInfo) {

    $inserQuery = mysqli_query($db_conn, $sqlQuery);
    echo json_encode(["massege" => "Insert Successfull", "status" => true]);
} else { 
    
    echo json_encode(["massege" => "Insert Failed!", "status" => false]);
}
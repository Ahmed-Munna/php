<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include("config.php");

$getFromTheUserJsonId = json_decode(file_get_contents("php://input"), true);

if (isset($getFromTheUserJsonId['id'])) {

    $actualUserId = $getFromTheUserJsonId['id'];

    $sqlQuery = "SELECT * FROM users WHERE id = {$actualUserId}";
    $result = mysqli_query($db_conn, $sqlQuery);

    $fetchSingleUsers = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {

        $convartJson = json_encode($fetchSingleUsers);
        echo $convartJson;
    } else {

        echo json_encode(["massege"=> "Fuck Off", "status" => false]);
    }

}





<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
include("config.php");


$fetch_all_users_query = "SELECT * FROM users";
$fetch_results = mysqli_query($db_conn, $fetch_all_users_query);

if (mysqli_num_rows($fetch_results) > 0) {

    $fetch_all_users = mysqli_fetch_all($fetch_results, MYSQLI_ASSOC);
    $convartJson = json_encode($fetch_all_users);

    echo $convartJson;

} else { 

    echo json_encode(["message" => "No record founded", "status" => false]);
}





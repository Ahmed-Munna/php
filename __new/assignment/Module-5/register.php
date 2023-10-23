<?php
// this allow method require for config.php page
$allow_method = "POST";
include("config.php");

session_start();

// If the user has already logged in, then redirect to the index page.

if (isset($_SESSION["user_name"]) && isset($_SESSION["user_password"])) {

    header("index.php");
}

if ($_SERVER("REQUEST_METHOD") == "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    if (
        isset($data["fname"]) &&
        isset($data["lname"]) &&
        isset($data["email"]) &&
        isset($data["phone"]) &&
        isset($data["password"]) &&
        isset($data["con_pass"]) &&
        isset($data["accept"])
    ) {

        $fname = Main::filter($data["fname"]);
        $lname = Main::filter($data["lname"]);
        $email = Main::filter($data["email"]);
        $phone = Main::filter($data["phone"]);
        $password = Main::filter($data["password"]);
        $conPassword = Main::filter($data["con_pass"]);
        $acceptCondition = Main::filter($data["accept"]);

        

    }
}
<?php
session_start();
if (isset($_SESSION["name"]) && isset($_SESSION["email"])) {
    header("index.php");
}

$allow_method = "POST";
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == $allow_method) {

    $data = json_decode(file_get_contents("php://input"), true);
    $name = Main::filter( $data["name"]);
    $email = Main::filter( $data["email"]);

    $main = new Main();

    if ( count($main->has_any_user($name, $email)) > 0) {
        
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;

        echo json_encode(["status"=> "success","message"=> "Login successfull"]);
    }
}

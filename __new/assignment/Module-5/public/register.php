<?php
include("../classes/Main.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $data = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "accept" => $_POST["accept"],
    ];

    if (
        isset($data["name"]) &&
        isset($data["email"]) &&
        isset($data["password"]) &&
        isset($data["accept"])
    ) {


        $name = Main::filter($data["name"]);
        $email = Main::filter($data["email"]);
        $password = Main::filter($data["password"]);
        $acceptCondition = Main::filter($data["accept"]);

        session_start();

        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["accept"] = $acceptCondition;
        $_SESSION["password"] = $password;
        $_SESSION["error"] = '';
        $_SESSION['massege'] = 'Login Successfull';

        header("Location: http://localhost/php/__new/assignment/Module-5/index.php");

    } else {

        $_SESSION["error"] = "You should fillup all input field";
        header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php");
    }
}
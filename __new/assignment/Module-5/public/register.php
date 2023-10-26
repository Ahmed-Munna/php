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


        $name = strtolower(Main::filter($data["name"]));
        $email = Main::filter($data["email"]);
        $password = sha1(Main::filter($data["password"]));
        $acceptCondition = Main::filter($data["accept"]);

        if (!file_exists("database/$name.json")) {

            session_start();

            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["accept"] = $acceptCondition;
            $_SESSION["password"] = $password;

            Main::json([
                "name" => $name,
                "email" => $email,
                "password" => $password,
                "accept" => $acceptCondition,
                "role" => "user"
            ]);

            $msg = "Register Successfull";
            header("Location: http://localhost/php/__new/assignment/Module-5/index.php?msg".$msg);
        } else {

            $error = "user name already exist";
            header("Location: http://localhost/php/__new/assignment/Module-5/sign-up.php?error=".$error);
        }

    } else {

        $error = "You should fillup all input field";
        header("Location: http://localhost/php/__new/assignment/Module-5/sign-up.php?error".$error);
    }
}
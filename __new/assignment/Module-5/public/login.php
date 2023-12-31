<?php
include("../classes/Main.php");

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = [
        "email" => $_POST["email"],
        "password" => $_POST["password"],
    ];

    // here semple validation for blank input fields

    if (
        isset($data["email"]) &&
        isset($data["password"])
    ) {

        $email = Main::filter($data["email"]);
        $password = Main::filter($data["password"]);

        // has any email and password or not
        if (Main::hasValue($data["email"],$data["password"])) {

                $profileValue = Main::fatchProfileValue($data["email"],$data["password"]);
                
                $_SESSION["name"] = $profileValue["name"];
                $_SESSION["email"] = $profileValue["email"];
                $_SESSION["password"] = $data["password"];
                $_SESSION["role"] = $profileValue["role"];

                $msg = 'Login Successfull';
                header("Location: http://localhost/php/__new/assignment/Module-5/index.php?msg=".$msg);
            } else {

                $error = "Invalid input field";
                header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php?error=".$error);
            }
    } else {
        
        $error = "You should fillup all input field";
        header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php?error=". $error);
    }
}
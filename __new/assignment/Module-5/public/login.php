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
        if (
            $_SESSION["email"] == $email && 
            $_SESSION["password"] == sha1($password)
            ) {
                $_SESSION["error"] = '';
                $_SESSION['massege'] = 'Login Successfull';
                header("Location: http://localhost/php/__new/assignment/Module-5/index.php");
            } else {

                $_SESSION["error"] = "Invalid input field";
                header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php");
            }
    } else {
        
        $_SESSION["error"] = "You should fillup all input field";
        header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php");
    }
}
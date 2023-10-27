<?php
include("../classes/Main.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $data = [
        "name" => $_POST["name"],
        "oldName" => $_POST["oldName"],
        "email" => $_POST["email"],
        "oldEmail" => $_POST["oldEmail"],
        "password" => $_POST["password"],
        "oldPassword" => $_POST["oldPassword"],
        "role" => $_POST["role"],
    ];

    $name = strtolower(Main::filter($data["name"]));
    $oldName = strtolower(Main::filter($data["oldName"]));

    $email = Main::filter($data["email"]);
    $oldEmail = Main::filter($data["oldEmail"]);
    

    // replece new value

    $newName = ($name != '')? $name : $oldName;
    $newEmail = ($email != '')? $email : $oldEmail;
    $newPassword = ($data["password"] != '')? sha1(Main::filter($data["password"])) : $data["oldPassword"];
    $role = strtolower(Main::filter($data["role"]));

    echo $newPassword;
    Main::updateJson($oldName,[
        "name"=> $newName,
        "email"=> $newEmail,
        "password"=> $newPassword,
        "accept" => "on",
        "role"=> $role,
    ]);

    $msg = "Update Successfull";
    header("Location: ../role-manage.php?msg=".$msg);
}
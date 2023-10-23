<?php
session_start();

if (isset($_SESSION["name"]) && isset($_SESSION["email"])) {

    echo json_encode([$_SESSION["name"] => $_SESSION["email"]]);
} else {

    header("login.php");
}

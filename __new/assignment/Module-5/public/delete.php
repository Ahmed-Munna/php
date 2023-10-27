<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
    $name = $_GET["name"];
    unlink("./database/{$name}.json");
    header("Location: ../role-manage.php");
}
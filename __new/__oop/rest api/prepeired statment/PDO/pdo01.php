<?php

$pdo = new PDO("mysql:host=localhost; port=3306;dbname=api_crud;chareset=UTF8", "root","");
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {

    $pstmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR address = ?");

    $pstmt->execute(['Email', 'khulna']);

    print_r($pstmt->fetchAll());
}
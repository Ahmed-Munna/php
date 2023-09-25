<?php

//  Password Generator

function generatePassword($length) {

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($chars) - 1);
        $password .= $chars[$randomIndex];
    }

    return $password;
}

$pass = generatePassword(12);

echo $pass;
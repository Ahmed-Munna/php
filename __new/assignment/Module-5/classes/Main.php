<?php


class Main {

    public static function filter($data) {

        return htmlspecialchars(htmlspecialchars_decode(trim($data)), true);
    }
}
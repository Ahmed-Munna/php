<?php


class Main {

    public static function filter($data) {

        return htmlspecialchars(htmlspecialchars_decode(trim($data)), true);
    }

    public static function json(array $data) {

        $fileName = $data["name"];
        $convartJson = json_encode($data);

        $fileOpen = fopen("../public/database/{$fileName}.json", "w");
        fwrite($fileOpen, $convartJson);
    }
}
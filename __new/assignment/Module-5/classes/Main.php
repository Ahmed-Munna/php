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

    public static function fatchValueFromDB() {

        $data = [];

        $scanDBDir = array_diff(scandir("../public/database/"), array(".",".."));

        if (count($scanDBDir) > 0) {

            foreach ($scanDBDir as $file) {

                $openFile = fopen("../public/database/{$file}","r");
                $fileRead = fread($openFile, filesize("../public/database/{$file}"));
                $convartArr = json_decode($fileRead, true);
    
                array_push($data, $convartArr);
            }
        } else {
            
            return false;
        }

        return $data;
    }

    public static function hasValue(string $email, string $password) {

        $allDbFiles = self::fatchValueFromDB();
        foreach ($allDbFiles as $DB) {
            
            if ($DB["email"] == $email && $DB["password"] == sha1($password)) {

                return true;
            }
        }
        return false;
    }

    public static function fatchProfileValue(string $email, string $password) {

        $allDbFiles = self::fatchValueFromDB();
        foreach ($allDbFiles as $DB) {
            
            if ($DB["email"] == $email && $DB["password"] == sha1($password)) {

                return [
                    "name" => $DB["name"],
                    "email"=> $DB["email"],
                    "password"=> $DB["password"],
                    "role"=> $DB["role"],
                ];
            }
        }
    }

    public static function fatchValue() {

        $data = [];

        $scanDBDir = array_diff(scandir("public/database/"), array(".",".."));

        if (count($scanDBDir) > 0) {

            foreach ($scanDBDir as $file) {

                $openFile = fopen("public/database/{$file}","r");
                $fileRead = fread($openFile, filesize("public/database/{$file}"));
                $convartArr = json_decode($fileRead, true);
    
                array_push($data, $convartArr);
            }
        } else {
            
            return false;
        }

        return $data;
    }

    public static function fatchProfile(string $email, string $password) {

        $allDbFiles = self::fatchValue();
        foreach ($allDbFiles as $DB) {
            
            if ($DB["email"] == $email && $DB["password"] == sha1($password)) {

                return [
                    "name" => $DB["name"],
                    "email"=> $DB["email"],
                    "password"=> $DB["password"],
                    "role"=> $DB["role"],
                ];
            }
        }
    }
}
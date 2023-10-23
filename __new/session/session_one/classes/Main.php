<?php

include("Database.php");

class Main extends Database{

    private $DB;

    public function __construct(){

        $this->DB = Database::__construct();
    }

    public static function filter($data) {

        return htmlspecialchars(htmlspecialchars_decode(trim($data)),true);
    }
    
    public function has_any_user(string $name, string $email) {

        try {

            $sql = "SELECT * FROM `users` WHERE `name` = :columnValue AND `email` = :columnTwoValue";

            $stmt = $this->DB->prepare( $sql );
            $stmt->bindParam(":columnValue", $name, PDO::PARAM_STR);
            $stmt->bindParam(":columnTwoValue", $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (count( $result ) > 0) {

                return $result;
            }

            return false;
        } catch (PDOException $e) {

            echo "Has any user error" . $e->getMessage();
            exit();
        }

    }

}
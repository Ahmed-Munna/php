<?php
class Humans{

    static $age = 20;
    public $page = 51;
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public static function name($name) {

        echo "\nHi, I am {$name}\n";
        echo "I am " . self::$age . " years old\n";
    }

    public function fatherName($name) {
        echo "Father's Name: " . $name . "\n";
        echo "Age difference with me: " . $this->page - self::$age;
    }


}

class HumanTwo extends Humans {

    public static function name($name) {

        echo "\nHi, I am {$name}\n";
        echo "I am " . self::$age . " years old\n";

        parent::name("aaa");
    }
}

$person = new Humans("Shahabuddin Sir");
$person->fatherName("Buddin");

Humans::name("Munna");
HumanTwo::name("Vau");
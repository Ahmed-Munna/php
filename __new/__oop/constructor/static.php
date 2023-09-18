<?php
// i do't no how any why it works?😲

/*
class ParrentClass {

    public $name;   
    public int $age;

    private function __construct($name, $age) {

        $this->name = $name;
        $this->age = $age;
    }

    public static function PersonOne($name, $age):static 
    {

        return new static($name, $age);
    }

    public static function PersonTwo($name, $age):static
    {

        return new static($name, $age);
    }
}


$p1 = ParrentClass::PersonOne("Munna", 20);
*/

class ParrentClass {

    protected const CONSTANTS = "CONSTANTS😀";

    public function __construct() {

        print("Parrent Class Start");
    }

    public function __destruct() {

        print("Parrent Class End");
    }

    public function MyName() {

        print("Ahmed Munna");
    }
}

class ChildClass extends ParrentClass {

    // public function __construct() {

    //     echo self::CONSTANTS;
    // }
}

class ChildClassTwo extends ChildClass {

    public const CONSTANT = "HELLO CONST";
    public function __construct() {

        echo parent::CONSTANTS;
    }
}

$parrentClass = new ChildClassTwo();

// $parrentClass->MyName();
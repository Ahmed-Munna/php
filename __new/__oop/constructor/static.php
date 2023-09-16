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

    public function __construct() {

        print("Parrent Class start");
    }

    public function __destruct() {

        print("Parrent Class End");
    }

    public function MyName() {

        print("Ahmed Munna");
    }
}

$parrentClass = new ParrentClass();

$parrentClass->MyName();
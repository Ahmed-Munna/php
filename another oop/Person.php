<?php
abstract class Person{

    abstract function getName();

    function id() {
        echo "hello";
    }

}

class SinglePerson extends Person {
    
    private $stdName;

    function __construct($name) {
        $this->stdName = $name;
    }

    function getName() {
        echo $this->stdName;
    }
}

$std = new SinglePerson('Munna');

$std->id();
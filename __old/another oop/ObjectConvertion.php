<?php

class Person{
    public $persons;

    function __construct($name) {
        $this->persons = $name;
    }

    function add($person) {
        return array_push($this->persons, $person);
    }

    function __toString() {
        return "The name is " . $this->persons;
    }
}

$person = new Person('MunnaVau') ;

echo $person;


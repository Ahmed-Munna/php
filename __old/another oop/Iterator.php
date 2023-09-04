<?php

// class Person implements IteratorAggregate {
//     private $persons;

//     function __construct() {
//         $this->persons = array();
//     }

//     function add($person) {
//         array_push($this->persons, $person);
//     }

//     function getPerson() {
//         return $this->persons;
//     }

//     function getIterator() {
//         return new ArrayIterator($this->persons);
//     }
// }

// $p = new Person;

// $p->add('Rohim');
// $p->add('karim');
// $p->add('Jamal');

// foreach ($p->getPerson() as $person) {
//     echo $person;
// }


class Person implements IteratorAggregate{
    private $persons;

    function __construct() {
        $this->persons = array();
    }

    function add($person) {
        array_push($this->persons, $person);
    }

    function getPerson() {
        return $this->persons;
    }

    function getIterator() {
        return new ArrayIterator($this->persons);
    }
}

$p = new Person;

$p->add('Rohim');
$p->add('Kohim');
$p->add('Johim');
$p->add('Mohim');

$single_persons = $p->getPerson();

foreach ($single_persons as $person) {
    echo $person . "\n";
}

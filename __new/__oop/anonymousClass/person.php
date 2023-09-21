<?php

class Person {

    public function personOne() {

        echo "Person One \n";
    }
}

class PersonTwo {

    public function parsonsTwo() {

        echo "Person Two \n";
        return new Person;
    }
}

class PersonThree {

    public function personsThree() {

        echo "Person Three \n";
        return new PersonTwo;
    }
}

$personclass = new PersonThree;

$personclass
    ->personsThree()
    ->parsonsTwo()
    ->personOne();

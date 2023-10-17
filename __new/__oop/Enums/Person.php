<?php

enum Person {

    case Hearts;
    case Dimonds;
    case Clubs;
    case Spades;

}

function user(Person $person) {

    echo $person;
}
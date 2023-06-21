<?php

interface Human {
    function canRun();
    function canSleep();
}

interface Animal extends Human{
    function cantLough();
}

class Animals implements Animal {
    public function canFight() {
        echo 'I can fight..!';
    }

    public function canRun() {
        echo 'Yes i can run';
    }

    public function canSleep() {
        echo 'Yes i can sleep';
    }
    function cantLough() {
        echo "Yes I can't Lough";
    }
}

class Person implements Human {
    public function canFight() {
        echo 'I can fight..!';
    }

    public function canRun() {
        echo 'Yes i can run';
    }

    public function canSleep() {
        echo 'Yes i can sleep';
    }
}

$h1 = new Animals();

$h1->canFight();

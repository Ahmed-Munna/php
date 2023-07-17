<?php

interface AnimaleEat{
    function canEat();
}

interface Animale {
    function canRun();
}

abstract class Human implements Animale{
   abstract function canSleep();
}   


class BaseAnimale implements Animale{
    function canEat() {
        echo "I can Eat";
    }

    function canRun() {
        echo "I can Run";
    }
}

class BaseHuman extends Human{
    function canSleep() {
        echo "Yes I can sleep";
    }

    function canEat() {
        echo "I can Eat";
    }

    function canRun() {
        echo "I can Run";
    }
}

$ani = new BaseAnimale();

$ani->canEat();
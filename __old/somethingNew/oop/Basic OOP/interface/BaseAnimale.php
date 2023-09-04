<?php

interface AnimaleEat{
    function canEat();
}

interface Animale {
    function canRun();
}


class AniOne implements Animale {
    function canRun() {
        return 'Can Run';
    }
}

class AniTwo extends AniOne {

    function something() {
        return 'Can every thing';
    }
}

$a = new AniTwo;

echo $a->something();
echo $a->canRun();

// abstract class Human implements Animale{
//    abstract function canSleep();
// }   


// class BaseAnimale implements Animale{
//     function canEat() {
//         echo "I can Eat";
//     }

//     function canRun() {
//         echo "I can Run";
//     }
// }

// class BaseHuman extends Human{
//     function canSleep() {
//         echo "Yes I can sleep";
//     }

//     function canEat() {
//         echo "I can Eat";
//     }

//     function canRun() {
//         echo "I can Run";
//     }
// }

// $ani = new BaseAnimale();

// $ani->canEat();
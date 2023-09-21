<?php

class Base {

    public function PrintSomething() {

        echo "Hello";
    }
}

trait PrintTrait {

    public function PrintAll() {

        parent::PrintSomething();
        echo " World";
    }
}

class PrintHello extends Base {

    use PrintTrait;

}


$printHello = new PrintHello;

$printHello->PrintSomething();

<?php

abstract class Car{
    protected $name;
    protected $model;
    protected $adition;

    final function __construct($name, $model, $adition) {
        $this->name = $name;
        $this->model = $model;
        $this->adition = $adition;
    }

    abstract function intro();
}

class Volvo extends Car{
    public function volvo() {
        echo "Name: " . $this->name . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Adition: " . $this->adition . "\n";
    }

    function intro() {
        echo "Choose Swedish quality!\n";
    }
    
}

class Audi extends Car{
    public function audi() {
        echo "Name: " . $this->name . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Adition: " . $this->adition . "\n"; 
    }

    public function intro() {
        echo "Choose German quality!\n";
    }
}

$v = new Volvo("Volvo", "B25O", "2021");
$v->volvo();
$v->intro();

$a = new Audi("Audi", "Q5", "2020");
$a->audi();
$a->intro();
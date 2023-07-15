<?php 

class Human {
    
    protected $name;
    public function __construct($name) {

        $this->name = $name;
    }

    protected function sayHi() {
        echo "Hi " . $this->name;
    }
}

$n = new Human("MUNNA");

$n->sayHi();
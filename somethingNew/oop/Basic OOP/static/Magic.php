<?php

class Magic {

    private $name;
    private $age;
    private $class;

    public function __construct($name='', $age='', $class='') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop) {
        return $this->$prop;
    }

    public function __set($prop, $value) {
        $this->$prop = $value;
    }
}

$m = new Magic("Munna", '49', "9");
$m->name = "Vau";

echo $m->name;
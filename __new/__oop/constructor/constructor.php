<?php

class ParrentClass {

    public function __construct(string $name) {

        echo $name . PHP_EOL;
    }
}

class ChildClass extends ParrentClass{
    public function __construct($name, $cname) {
        ParrentClass::__construct($name);
        echo $cname;
    }
}

$parrentClass = new ParrentClass("Parrent Class");
$childClass = new ChildClass("Parrent Classes", "Child Class");
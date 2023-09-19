<?php

abstract class ParentClass {

    abstract protected function activity();

    public function MyName(string $name) {

        return $name;
    }
} 

class ChildClass extends ParentClass{

    public function activity() {

        return "blablabal";
    }
}

$ChildClass = new ChildClass;

echo $ChildClass->MyName("Munna").PHP_EOL;
echo $ChildClass->activity();
<?php

class Property {

    public readonly string $assign;

    public function __construct(string $name) {
        $this->assign = $name;
    }
    const age = ['skdf', 'asldk'];
}

$Property = new Property("MUNNA");

echo $Property->assign;

$Property->myInfo = "Bangladesh";


var_dump(Property::age);

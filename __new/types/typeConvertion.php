<?php

$arr = array(
    "a" => "Munna",
    "b" => "Vau" 
);

$obj = (object) $arr;

class MyClass {
    public $a = 30;
    public function __construct($a) {
        $this->a = $a;
    }

    public function myFunc() {
        echo "blablabal";
        return;
    }
}

$myc = new MyClass(50);

function aFunc(int $a){
    return $a;
} 

echo aFunc(10);
// print_r($myc);
// var_dump($obj);


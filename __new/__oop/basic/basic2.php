<?php
/*
class ParrentClass {

    public function getNew() {

        return new static;
    }
}

class ChildClass extends ParrentClass {

    
}

$ParrentObj = new ParrentClass;

$newParrentObj = new $ParrentObj;

var_dump($newParrentObj === $ParrentObj);

echo (new DateTime())->format('D');
*/


class MainClass {

   public $name;
   public function __construct() {

    $this->name = function() {

        return "Munna";  
    };
   }
}


$MainCls = new MainClass();

echo ($MainCls->name)();
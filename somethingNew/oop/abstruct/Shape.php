<?php

class Shape{

    function sayHi() : string {

        return "Hi, We are Shape";
    }
}

class Shapes{

    private $shapes;
    public function __construct() {
        $this->shapes = array();
    }

    public function addShape(Shape $shape) {
        array_push($this->shapes, $shape);
    }

    public function countShape() {
        return count($this->shapes);
    }

}

class Triangle extends Shape {

}

class Rectngle extends Shape {
    
}

class Age{

}

$shap = new Shapes();

$shap->addShape(new Triangle());
$shap->addShape(new Rectngle());

echo $shap->countShape();
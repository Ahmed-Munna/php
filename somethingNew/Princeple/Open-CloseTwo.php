<?php 

class Company {
    public function showProduct(AllProduct $product) {
        $product->displayProduct();
    }
}

abstract class AllProduct {
    public $countProduct;
    public function __construct() {
        $this->countProduct = array();
    }
    public abstract function displayProduct();
}

class Potato extends AllProduct {
    public function displayProduct() {
        $potato = array(1);
        $this->countProduct = array_push($potato);
        print_r($this->countProduct);
    }
}

class Milk extends AllProduct {
    public function displayProduct() {
        $potato = array(1);
        $this->countProduct = array_push($potato);
        print_r($this->countProduct);
    }
}

class Bread extends AllProduct {
    public function displayProduct() {
        $potato = array(3,3);
        $this->countProduct = array_push($potato);
        print_r($this->countProduct);
    }
}

$all = new Company;
$p = new Potato;
$all->showProduct($p);
$all->showProduct(new Bread);


















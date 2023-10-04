<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product ID: {$this->id}" . PHP_EOL;
        echo "Product Name: {$this->name}" . PHP_EOL;
        echo "Product Price: $" . $this->getFormattedPrice() . PHP_EOL;
    }
}

$product = new Product(1, "Example Product", 19.99);
$product->showDetails();

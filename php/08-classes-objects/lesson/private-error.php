<?php
// test: skip
// Fails on purpose: reading a private property.
// Lesson 17, slide 4.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product("Keyboard", 120);
echo $product1->name . "<br>";   // Keyboard
echo $product1->price;           // Fatal error: Cannot access private property
echo "Ta linia się nie wykona.";

<?php
// __construct.
// Lesson 16, slides 4-5.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: klasa z konstruktorem</h2>";
class Product {
    public $name;
    public $price;

    // Called automatically by new.
    public function __construct($name, $price) {
        // $name is the parameter, $this->name the property.
        $this->name = $name;
        $this->price = $price;
    }
}
$product1 = new Product("Keyboard", 120);
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120

echo "<h2>Slajd 5: konstruktor z parametrami</h2>";
$product2 = new Product("Mouse", 45);
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->price . "<br>";   // Mouse - 45
// ArgumentCountError: Too few arguments to function Product::__construct()
// $product3 = new Product("Mouse");

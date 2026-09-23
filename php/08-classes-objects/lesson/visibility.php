<?php
// public, private, protected.
// Lesson 17, slides 4-5.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: private z zewnątrz</h2>";
class Product {
    public $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Slide 5 method; a class can be declared only once per file.
    public function getPrice() {
        return $this->price;
    }
}
$product1 = new Product("Keyboard", 120);
echo $product1->name . "<br>";   // Keyboard
// Fatal error: Cannot access private property Product::$price
// echo $product1->price;

echo "<h2>Slajd 5: getPrice jako droga do private</h2>";
echo $product1->getPrice() . "<br>";                        // 120
$product2 = new Product("Mouse", 45);
echo $product1->name . " - " . $product1->getPrice() . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->getPrice() . "<br>";   // Mouse - 45

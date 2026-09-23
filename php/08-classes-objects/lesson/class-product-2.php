<?php
// Lesson 16, slide 8: exercise 1 solution, class-product.php with a constructor.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product("Keyboard", 120);
$product2 = new Product("Mouse", 45);

echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->price . "<br>";   // Mouse - 45

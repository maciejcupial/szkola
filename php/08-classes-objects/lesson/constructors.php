<?php
// __construct.
// Lesson 16, slides 4-5.
header("Content-Type: text/html; charset=UTF-8");

// Slide 4
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

// Slide 5
$product2 = new Product("Mouse", 45);
// ArgumentCountError: Too few arguments to function Product::__construct()
// $product3 = new Product("Mouse");
?>
<h2>Slajd 4: klasa z konstruktorem</h2>
<p><?= htmlspecialchars($product1->name) ?> - <?= $product1->price ?></p>  <!-- Keyboard - 120 -->

<h2>Slajd 5: konstruktor z parametrami</h2>
<p><?= htmlspecialchars($product1->name) ?> - <?= $product1->price ?></p>  <!-- Keyboard - 120 -->
<p><?= htmlspecialchars($product2->name) ?> - <?= $product2->price ?></p>  <!-- Mouse - 45 -->

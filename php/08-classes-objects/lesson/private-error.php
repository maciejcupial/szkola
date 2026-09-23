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
?>
<p><?= htmlspecialchars($product1->name) ?></p>  <!-- Keyboard -->
<p><?= $product1->price ?></p>  <!-- Fatal error: Cannot access private property -->
<p>Ta linia się nie wykona.</p>

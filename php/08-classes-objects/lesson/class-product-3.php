<?php
// Lesson 17, slide 7: exercise 1 solution, class-product.php with private $price.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

$product1 = new Product("Keyboard", 120);
$product2 = new Product("Mouse", 45);
?>
<p><?= htmlspecialchars($product1->name) ?> - <?= $product1->getPrice() ?></p>  <!-- Keyboard - 120 -->
<p><?= htmlspecialchars($product2->name) ?> - <?= $product2->getPrice() ?></p>  <!-- Mouse - 45 -->

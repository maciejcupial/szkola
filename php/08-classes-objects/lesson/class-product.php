<?php
// Lesson 15, slide 8: exercise 1 solution.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    public $price;
}

$product1 = new Product();
$product1->name = "Keyboard";
$product1->price = 120;

$product2 = new Product();
$product2->name = "Mouse";
$product2->price = 45;
?>
<p><?= htmlspecialchars($product1->name) ?> - <?= $product1->price ?></p>  <!-- Keyboard - 120 -->
<p><?= htmlspecialchars($product2->name) ?> - <?= $product2->price ?></p>  <!-- Mouse - 45 -->

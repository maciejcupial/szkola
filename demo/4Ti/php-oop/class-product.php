<?php
// Lesson 15 (4Ti): model solution of exercise 1 (slide 8), the file students name class-product.php.
// Expected: two lines, „Keyboard - 120” and „Mouse - 45”.
// Lessons 16 and 17 keep working on this one file; the later stages are class-product-2.php
// (constructor) and class-product-3.php (private price and getPrice).
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

echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->price . "<br>";   // Mouse - 45

<?php
// Lesson 16 (4Ti): model solution of exercise 1 (slide 8), the constructor added to the file
// students keep calling class-product.php. Saved here under a second name so all three stages
// of the lesson can live in one folder.
// Expected: two lines, „Keyboard - 120” and „Mouse - 45”, exactly as in lesson 15.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// The old lines that set the properties one by one are gone: the constructor does that now.
$product1 = new Product("Keyboard", 120);
$product2 = new Product("Mouse", 45);

echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->price . "<br>";   // Mouse - 45

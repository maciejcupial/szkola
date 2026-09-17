<?php
// test: skip
// Lesson 17 (4Ti): the file that fails on purpose, for slide 4 of 27_php_oop/slajdy_3.html.
// Open http://localhost:8000/private-error.php on the projector: the page stops with
// Fatal error: Cannot access private property Product::$price. Then move back to visibility.php,
// where getPrice() fixes it. Serve with php -S localhost:8000 in this folder.
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
echo $product1->name . "<br>";   // Keyboard, printed before the error
echo $product1->price;           // Fatal error: Cannot access private property
echo "Ta linia się nie wykona.";

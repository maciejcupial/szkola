<?php
// Lesson 17 (4Ti): model solution of exercise 1 (slide 7), private $price and getPrice() added
// to the file students keep calling class-product.php. Saved here under a third name so all
// three stages of the topic can live in one folder.
// Expected: two lines, „Keyboard - 120” and „Mouse - 45”, the price now read through getPrice().
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;       // stays public on purpose, to show the contrast
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

echo $product1->name . " - " . $product1->getPrice() . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->getPrice() . "<br>";   // Mouse - 45
// Step 5 of the exercise: echo $product1->price; throws a Fatal error and then gets deleted.
// private-error.php in this folder is that broken version, ready to open.

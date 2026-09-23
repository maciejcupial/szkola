<?php
// Exam questions, answers: 1 -> D, 2 -> B.
// Lesson 16, slide 7. Plain text page: question 1 prints from inside the class.
header("Content-Type: text/plain; charset=UTF-8");

class Fruit {
    function __construct() {
        echo "test1";
    }
    function __destruct() {
        echo "test2";
    }
}

class Product {
    public $name;
    public $price;

    public function __construct($name, $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }
}

echo "1: co wypisze ten skrypt?\n";
$pear = new Fruit();
unset($pear);               // test1test2
echo "\n";

echo "2: które wywołanie jest poprawne?\n";
$product = new Product("Mouse");                        // answer B
echo $product->name . " - " . $product->price . "\n";   // Mouse - 0
// new Product();      ArgumentCountError
// new Product;        ArgumentCountError
// Product("Mouse", 45);   Error: Call to undefined function Product()

<?php
// Exam questions, answers: 1 -> D, 2 -> B.
// Lesson 16, slide 7.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: co wypisze ten skrypt?</h2>";
class Owoc {
    function __construct() {
        echo "test1";
    }
    function __destruct() {
        echo "test2";
    }
}
$gruszka = new Owoc();
unset($gruszka);            // test1test2
echo "<br>";

echo "<h2>2: które wywołanie jest poprawne?</h2>";
class Product {
    public $name;
    public $price;

    public function __construct($name, $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }
}
$product = new Product("Mouse");                       // answer B
echo $product->name . " - " . $product->price . "<br>";   // Mouse - 0
// new Product();      ArgumentCountError
// new Product;        ArgumentCountError
// Product("Mouse", 45);   Error: Call to undefined function Product()

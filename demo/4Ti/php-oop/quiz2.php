<?php
// Lesson 16 (4Ti): the two exam questions from slide 7, as code you can run.
// Answers: 1 -> D (both „test1” and „test2” appear), 2 -> B (new Product("Mouse")).
// The first listing keeps the Polish names from the exam paper, the rest of this folder is English.
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
unset($gruszka);            // test1test2, the destructor runs at the end of the script anyway
echo "<br>";

echo "<h2>2: które wywołanie jest poprawne?</h2>";
class Product {
    public $name;
    public $price;

    public function __construct($name, $price = 0) {   // $price has a default value
        $this->name = $name;
        $this->price = $price;
    }
}
$product = new Product("Mouse");                       // answer B, $price falls back to 0
echo $product->name . " - " . $product->price . "<br>";   // Mouse - 0
// The other three stop the script. Uncomment one live, read the message, comment it back:
// new Product();      ArgumentCountError, $name has no default value
// new Product;        the same error, the brackets are not the problem
// Product("Mouse", 45);   Error: Call to undefined function Product()

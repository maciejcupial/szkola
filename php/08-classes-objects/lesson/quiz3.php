<?php
// Exam questions, answers: 1 -> B, 2 -> B.
// Lesson 17, slide 6.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: do którego pola jest dostęp z zewnątrz?</h2>";
class Dane {
    public $a;
    private $b;
    protected $c;
}
$dane = new Dane();
$dane->a = "wartość a";
echo $dane->a . "<br>";   // wartość a
// echo $dane->b;   Fatal error: Cannot access private property Dane::$b
// echo $dane->c;   Fatal error: Cannot access protected property Dane::$c

echo "<h2>2: który zapis nie spowoduje błędu?</h2>";
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
echo $product1->getPrice() . "<br>";   // 120, answer B
// Fatal error: Cannot access private property Product::$price
// echo $product1->price;
// $product1->price = 10;
// print $product1->price;

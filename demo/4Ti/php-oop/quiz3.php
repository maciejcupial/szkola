<?php
// Lesson 17 (4Ti): the two exam questions from slide 6, as code you can run.
// Answers: 1 -> B (only the public field $a), 2 -> B (echo $product1->getPrice();).
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: do którego pola jest dostęp z zewnątrz?</h2>";
class Dane {
    public $a;
    private $b;
    protected $c;
}
$dane = new Dane();
$dane->a = "wartość a";
echo $dane->a . "<br>";   // wartość a, answer B: only the public field
// The other two stop the script with Fatal error: Cannot access private property Dane::$b
// and Cannot access protected property Dane::$c. Uncomment one live, then comment it back.
// echo $dane->b;
// echo $dane->c;

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
// The other three touch $price directly and all throw Fatal error: Cannot access private
// property Product::$price. Uncomment one live, read the message, comment it back.
// echo $product1->price;
// $product1->price = 10;
// print $product1->price;

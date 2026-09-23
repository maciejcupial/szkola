<?php
// Exam questions, answers: 1 -> B, 2 -> B.
// Lesson 17, slide 6.
header("Content-Type: text/html; charset=UTF-8");

class Data {
    public $a;
    private $b;
    protected $c;
}
$data = new Data();
$data->a = "wartość a";
// $b = $data->b;   Fatal error: Cannot access private property Data::$b
// $c = $data->c;   Fatal error: Cannot access protected property Data::$c

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
// Fatal error: Cannot access private property Product::$price
// $price = $product1->price;
// $product1->price = 10;
?>
<h2>1: do którego pola jest dostęp z zewnątrz?</h2>
<p><?= htmlspecialchars($data->a) ?></p>  <!-- wartość a -->

<h2>2: który zapis nie spowoduje błędu?</h2>
<p><?= $product1->getPrice() ?></p>  <!-- 120, answer B -->

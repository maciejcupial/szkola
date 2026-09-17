<?php
// Lesson 17 (4Ti): public, private, protected. Live-coding target for slides 4-5 of
// 27_php_oop/slajdy_3.html. The error from slide 4 has its own ready file: private-error.php.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/visibility.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: private z zewnątrz</h2>";
class Product {
    public $name;       // public: readable everywhere, also outside the class
    private $price;     // private: readable only inside this class

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Slide 5 adds this method to the same class. PHP allows one declaration of a class per
    // file, so it already sits here; on the projector you type it when slide 5 comes up.
    public function getPrice() {
        return $this->price;    // inside the class private is no obstacle
    }
}
$product1 = new Product("Keyboard", 120);
echo $product1->name . "<br>";   // Keyboard, $name is public
// Reading a private property from outside stops the script with
// Fatal error: Cannot access private property Product::$price.
// Open private-error.php to show it, or uncomment this line and comment it back.
// echo $product1->price;

echo "<h2>Slajd 5: getPrice jako droga do private</h2>";
echo $product1->getPrice() . "<br>";                        // 120
$product2 = new Product("Mouse", 45);
echo $product1->name . " - " . $product1->getPrice() . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->getPrice() . "<br>";   // Mouse - 45

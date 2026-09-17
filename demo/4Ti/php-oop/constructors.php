<?php
// Lesson 16 (4Ti): __construct. Live-coding target for slides 4-5 of 27_php_oop/slajdy_2.html.
// The „before” version from slide 4, with the properties set line by line, is class-product.php
// in this folder; slide 6 (the destructor) has its own file, destructor.php.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/constructors.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: klasa z konstruktorem</h2>";
class Product {
    public $name;
    public $price;

    // PHP calls __construct by itself on every new, with the values from the brackets.
    // It has to be public, otherwise new cannot reach it from outside the class.
    public function __construct($name, $price) {
        // $name is the parameter of the method, $this->name the property of the object:
        // two different variables that happen to share a name.
        $this->name = $name;
        $this->price = $price;
    }
}
$product1 = new Product("Keyboard", 120);   // one line instead of the three from lesson 15
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120

echo "<h2>Slajd 5: konstruktor z parametrami</h2>";
$product2 = new Product("Mouse", 45);
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
echo $product2->name . " - " . $product2->price . "<br>";   // Mouse - 45
// A missing argument stops the script with ArgumentCountError: Too few arguments to function
// Product::__construct(). Uncomment live, read the message, comment it back.
// $product3 = new Product("Mouse");

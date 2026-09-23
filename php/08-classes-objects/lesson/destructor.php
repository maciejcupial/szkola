<?php
// __destruct.
// Lesson 16, slide 6.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Utworzono: " . $this->name . "<br>";
    }

    // Runs when nothing points at the object any more.
    public function __destruct() {
        echo "Usunieto: " . $this->name . "<br>";
    }
}

$product1 = new Product("Keyboard");   // Utworzono: Keyboard
unset($product1);                      // Usunieto: Keyboard
$product2 = new Product("Mouse");      // Utworzono: Mouse (Usunieto: Mouse at script end)

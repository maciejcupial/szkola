<?php
// Lesson 16 (4Ti): __destruct, the separate test file for slide 6 of 27_php_oop/slajdy_2.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/destructor.php
// Expected order on the page: „Utworzono: Keyboard”, then „Usunieto: Keyboard”.
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Utworzono: " . $this->name . "<br>";
    }

    // PHP calls __destruct by itself, the moment nothing points at the object any more.
    public function __destruct() {
        echo "Usunieto: " . $this->name . "<br>";
    }
}

$product1 = new Product("Keyboard");   // Utworzono: Keyboard
unset($product1);                      // Usunieto: Keyboard, unset drops the last reference
// Without unset the destructor still runs, only later: PHP cleans up when the script ends.
$product2 = new Product("Mouse");      // Utworzono: Mouse, then Usunieto: Mouse at the very end

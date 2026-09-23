<?php
// Class, object, properties.
// Lesson 15, slides 3-6.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: klasa i obiekt</h2>";
echo "Klasa Product to szablon: właściwości name i price, jeszcze bez wartości.<br>";
echo "Obiekt to egzemplarz zrobiony według tego szablonu.<br>";

echo "<h2>Slajd 4: class i new</h2>";
class Product {
    public $name;
    public $price;

    // Slide 5 method; a class can be declared only once per file.
    public function showInfo() {
        echo $this->name . " kosztuje " . $this->price . " zl<br>";
    }
}
$product1 = new Product();
$product1->name = "Keyboard";   // no $ after the arrow
$product1->price = 120;
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
// Error: Call to undefined function Product()
// $product3 = Product();

echo "<h2>Slajd 5: metoda i \$this</h2>";
$product1->showInfo();          // Keyboard kosztuje 120 zl
$product2 = new Product();
$product2->name = "Mouse";
$product2->price = 45;
$product2->showInfo();          // Mouse kosztuje 45 zl

echo "<h2>Slajd 6: dwa obiekty, dwie niezależne wartości</h2>";
class Student {
    public $name;
}
$student1 = new Student();
$student1->name = "Ania";
$student2 = new Student();
$student2->name = "Kuba";
echo $student1->name . "<br>";              // Ania
echo $student2->name . "<br>";              // Kuba
$student1->name = "Zosia";
echo $student1->name . " / " . $student2->name . "<br>";   // Zosia / Kuba

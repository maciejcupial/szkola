<?php
// Lesson 15 (4Ti): class, object, properties. Live-coding target for slides 3-6 of
// 27_php_oop/slajdy_1.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/classes.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: klasa i obiekt</h2>";
// Slide 3 is a diagram, not code: one class Product is the template, two objects made from it
// keep their own values. The code for that template starts on slide 4.
echo "Klasa Product to szablon: właściwości name i price, jeszcze bez wartości.<br>";
echo "Obiekt to egzemplarz zrobiony według tego szablonu.<br>";

echo "<h2>Slajd 4: class i new</h2>";
class Product {
    public $name;
    public $price;

    // Slide 5 adds this method to the same class. PHP allows one declaration of a class per
    // file, so the method already sits here; on the projector you type it when slide 5 comes up.
    public function showInfo() {
        // $this is the object that called the method, so it reads that object's own values.
        echo $this->name . " kosztuje " . $this->price . " zl<br>";
    }
}
$product1 = new Product();      // new builds one object out of the template
$product1->name = "Keyboard";   // a property is set through the arrow, with no dollar after it
$product1->price = 120;
echo $product1->name . " - " . $product1->price . "<br>";   // Keyboard - 120
// Without new PHP looks for a function called Product and stops with
// Error: Call to undefined function Product(). Uncomment live, read the message, comment it back.
// $product3 = Product();

echo "<h2>Slajd 5: metoda i \$this</h2>";
$product1->showInfo();          // Keyboard kosztuje 120 zl
$product2 = new Product();
$product2->name = "Mouse";
$product2->price = 45;
$product2->showInfo();          // Mouse kosztuje 45 zl, the same method, the other object

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
$student1->name = "Zosia";                  // one object changes, the other keeps its value
echo $student1->name . " / " . $student2->name . "<br>";   // Zosia / Kuba

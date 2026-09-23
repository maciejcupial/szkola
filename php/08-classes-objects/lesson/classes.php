<?php
// Class, object, properties.
// Lesson 15, slides 3-6.
header("Content-Type: text/html; charset=UTF-8");

// Slide 4
class Product {
    public $name;
    public $price;

    // Slide 5 method; a class can be declared only once per file.
    public function showInfo() {
        return $this->name . " kosztuje " . $this->price . " zl";
    }
}
$product1 = new Product();
$product1->name = "Keyboard";   // no $ after the arrow
$product1->price = 120;
// Error: Call to undefined function Product()
// $product3 = Product();

// Slide 5
$product2 = new Product();
$product2->name = "Mouse";
$product2->price = 45;

// Slide 6
class Student {
    public $name;
}
$student1 = new Student();
$student1->name = "Ania";
$student2 = new Student();
$student2->name = "Kuba";
$student1NameBefore = $student1->name;
$student1->name = "Zosia";
?>
<h2>Slajd 3: klasa i obiekt</h2>
<p>Klasa Product to szablon: właściwości name i price, jeszcze bez wartości.</p>
<p>Obiekt to egzemplarz zrobiony według tego szablonu.</p>

<h2>Slajd 4: class i new</h2>
<p><?= htmlspecialchars($product1->name) ?> - <?= $product1->price ?></p>  <!-- Keyboard - 120 -->

<h2>Slajd 5: metoda i $this</h2>
<p><?= htmlspecialchars($product1->showInfo()) ?></p>  <!-- Keyboard kosztuje 120 zl -->
<p><?= htmlspecialchars($product2->showInfo()) ?></p>  <!-- Mouse kosztuje 45 zl -->

<h2>Slajd 6: dwa obiekty, dwie niezależne wartości</h2>
<p><?= htmlspecialchars($student1NameBefore) ?></p>  <!-- Ania -->
<p><?= htmlspecialchars($student2->name) ?></p>  <!-- Kuba -->
<!-- Zosia / Kuba -->
<p><?= htmlspecialchars($student1->name) ?> / <?= htmlspecialchars($student2->name) ?></p>

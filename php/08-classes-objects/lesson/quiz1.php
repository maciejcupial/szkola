<?php
// Exam questions, answers: 1 -> B, 2 -> B.
// Lesson 15, slide 7.
header("Content-Type: text/html; charset=UTF-8");

class Point {
    public $x;
    public $y;
}
$point = new Point();        // answer B
$point->x = 3;
$point->y = 4;
// Parse error
// $point Point;

class Fruit {
    public $name;
    private $color;
    function setName($name) {
        $this->name = $name;
    }
}
$fruit = new Fruit();
$fruit->setName("gruszka");
// Fatal error: Cannot access private property Fruit::$color
// $color = $fruit->color;
?>
<h2>1: która instrukcja tworzy obiekt?</h2>
<p>Punkt (<?= $point->x ?>, <?= $point->y ?>)</p>  <!-- Punkt (3, 4) -->

<h2>2: co opisuje klasa Fruit?</h2>
<p><?= htmlspecialchars($fruit->name) ?></p>  <!-- gruszka -->

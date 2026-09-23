<?php
// Exam questions, answers: 1 -> B, 2 -> B.
// Lesson 15, slide 7.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: która instrukcja tworzy obiekt?</h2>";
class Punkt {
    public $x;
    public $y;
}
$pkt = new Punkt();          // answer B
$pkt->x = 3;
$pkt->y = 4;
echo "Punkt (" . $pkt->x . ", " . $pkt->y . ")<br>";   // Punkt (3, 4)
// Parse error
// $pkt Punkt;

echo "<h2>2: co opisuje klasa Owoc?</h2>";
class Owoc {
    public $nazwa;
    private $kolor;
    function set_nazwa($nazwa) {
        $this->nazwa = $nazwa;
    }
}
$owoc = new Owoc();
$owoc->set_nazwa("gruszka");
echo $owoc->nazwa . "<br>";   // gruszka
// Fatal error: Cannot access private property Owoc::$kolor
// echo $owoc->kolor;

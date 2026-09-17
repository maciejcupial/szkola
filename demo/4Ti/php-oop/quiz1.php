<?php
// Lesson 15 (4Ti): the two exam questions from slide 7, as code you can run.
// Answers: 1 -> B ($pkt = new Punkt();), 2 -> B (two properties, one method, $kolor private).
// The listings keep the Polish names from the exam papers, the rest of this folder is English.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: która instrukcja tworzy obiekt?</h2>";
class Punkt {
    public $x;
    public $y;
}
$pkt = new Punkt();          // answer B, the only one of the four that is valid PHP
$pkt->x = 3;
$pkt->y = 4;
echo "Punkt (" . $pkt->x . ", " . $pkt->y . ")<br>";   // Punkt (3, 4)
// The other three answers are not PHP at all. Uncomment one live, read the parse error,
// then comment it back.
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
echo $owoc->nazwa . "<br>";   // gruszka, two properties and one method, so answer B
// $kolor is private, so it can be read only inside the class. Uncomment live to see
// Fatal error: Cannot access private property Owoc::$kolor, then comment it back.
// echo $owoc->kolor;

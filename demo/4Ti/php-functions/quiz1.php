<?php
// Lesson 10 (4Ti): „co wypisze?” fragments from slajdy_1.html, warm-up (slide 2) and the two
// exam questions (slide 8, CKE EE.09 czerwiec 2022 zad. 9 and E.14 wrzesień 2015 zad. 31).
// The exam code keeps the Polish names printed on the slide, so the screen matches the deck.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/quiz1.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze ta pętla?</h2>";
$grades = [4, 5, 3, 5];
foreach ($grades as $grade) {
    echo $grade . " ";          // 4 5 3 5
}
echo "<br>";
echo array_sum($grades) / count($grades);   // 4.25, średnia w jednej linii
echo "<br>";

echo "<h2>2. Egzamin: czy funkcja zwraca wartość?</h2>";
function dzialania(int $x, float $y) {
    $z = $x + $y;
    return $z;
}
echo dzialania(2, 0.5);   // 2.5, odpowiedź A: funkcja zwraca wartość przez return
echo "<br>";

echo "<h2>3. Egzamin: co robi ta funkcja?</h2>";
function fun1($liczba) {
    if ($liczba % 2 == 0) return 1;
    return 0;
}
echo fun1(4);   // 1, odpowiedź C: zwraca 1, gdy liczba jest parzysta
echo "<br>";
echo fun1(3);   // 0

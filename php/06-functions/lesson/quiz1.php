<?php
// Lesson 10, slides 2 and 8: "co wypisze?" quiz, exam code keeps Polish names from the slide.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze ta pętla?</h2>";
$grades = [4, 5, 3, 5];
foreach ($grades as $grade) {
    echo $grade . " ";          // 4 5 3 5
}
echo "<br>";
echo array_sum($grades) / count($grades);   // 4.25
echo "<br>";

echo "<h2>2. Egzamin: czy funkcja zwraca wartość?</h2>";
function dzialania(int $x, float $y) {
    $z = $x + $y;
    return $z;
}
echo dzialania(2, 0.5);   // 2.5, odpowiedź A
echo "<br>";

echo "<h2>3. Egzamin: co robi ta funkcja?</h2>";
function fun1($liczba) {
    if ($liczba % 2 == 0) return 1;
    return 0;
}
echo fun1(4);   // 1, odpowiedź C
echo "<br>";
echo fun1(3);   // 0

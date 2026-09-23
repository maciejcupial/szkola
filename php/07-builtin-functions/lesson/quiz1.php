<?php
// Lesson 13, slides 2 and 7: "co wypisze?" quiz.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: rozgrzewka, funkcja z lekcji 12</h2>";
function sumUpTo($upTo) {
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;
        $i++;
    }
    return $sum;
}
echo sumUpTo(3);            // 6
// Warning: Undefined variable $sum
// echo $sum;

echo "<h2>2: egzamin, poprawna kolejność argumentów</h2>";
echo str_replace("kota", "mysz", "ala ma kota");   // ala ma mysz, odpowiedź D

echo "<h2>3: egzamin, ta sama funkcja z zamienioną kolejnością</h2>";
// Answer C: nothing found, no error, the subject comes back unchanged.
echo str_replace("ala ma kota", "kota", "mysz");   // mysz
// Fatal error: Uncaught Error: Call to undefined function replace()
// echo replace("kota", "mysz", "ala ma kota");

echo "<h2>4: egzamin, trzy funkcje na wielkość liter</h2>";
echo strtoupper("ala ma psa") . "<br>";   // ALA MA PSA, odpowiedź A
echo strtolower("ALA MA PSA") . "<br>";   // ala ma psa
echo ucfirst("ala ma psa") . "<br>";      // Ala ma psa
// Fatal error: Uncaught ArgumentCountError
// echo strstr("ala ma psa");

echo "<h2>5: liczenie znaków</h2>";
echo strlen(" Ala ma kota ");   // 13

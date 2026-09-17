<?php
// Lesson 11 (4Ti): „co wypisze?” fragments from slajdy_2.html, warm-up (slide 2) and the two
// exam questions (slide 8, CKE E.14 czerwiec 2017 zad. 33 and E.14 czerwiec 2015 zad. 31).
// Both exam questions print their function as licz(); one file cannot hold two functions of the
// same name, so the second one is licz2() here.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/quiz2.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze ten kod?</h2>";
function squareArea($side) {
    $area = $side * $side;
    return $area;
}
echo squareArea(5);   // 25
echo "<br>";
// Z echo $area; zamiast return strona nadal pokazałaby 25, ale wywołanie dałoby NULL.

echo "<h2>2. Egzamin: suma połowy a i połowy b</h2>";
function licz($a, $b) {
    return $a / 2 + $b / 2;      // odpowiedź C
}
echo licz(10, 4);   // 7
echo "<br>";
// Pozostałe opcje dla licz(10, 4): $a/2 + $b daje 9, 2/$a + 2/$b daje 0.7, ($a/2 + $b)/2 daje 4.5.

echo "<h2>3. Egzamin: połowa kwadratu przekazanej wartości</h2>";
function licz2($a) {
    return $a * $a / 2;          // odpowiedź D
}
echo licz2(4);   // 8
echo "<br>";
// Opcje z echo zamiast return wypisują wynik, ale nic nie zwracają, więc odpadają.

<?php
// Lesson 11, slides 2 and 8: "co wypisze?" quiz.
// On the slide both exam functions are licz(); the second is licz2() here.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze ten kod?</h2>";
function squareArea($side) {
    $area = $side * $side;
    return $area;
}
echo squareArea(5);   // 25
echo "<br>";

echo "<h2>2. Egzamin: suma połowy a i połowy b</h2>";
function licz($a, $b) {
    return $a / 2 + $b / 2;      // odpowiedź C
}
echo licz(10, 4);   // 7
echo "<br>";

echo "<h2>3. Egzamin: połowa kwadratu przekazanej wartości</h2>";
function licz2($a) {
    return $a * $a / 2;          // odpowiedź D
}
echo licz2(4);   // 8
echo "<br>";

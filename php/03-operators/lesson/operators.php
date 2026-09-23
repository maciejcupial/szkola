<?php
// Lesson 5 (4Ti): operators, slides 3-8.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: sześć działań</h2>";
echo 17 + 5 . "<br>";      // 22
echo 17 - 5 . "<br>";      // 12
echo 17 * 5 . "<br>";      // 85
echo 7 / 2 . "<br>";       // 3.5
echo 17 % 5 . "<br>";      // 2
echo 2 ** 10 . "<br>";     // 1024
var_dump(6 / 2);           // int(3)
echo "<br>";
var_dump(7 / 2);           // float(3.5)

echo "<h2>Slajd 4: reszta i dzielenie całkowite</h2>";
echo 10 % 2 . "<br>";        // 0
echo 7 % 2 . "<br>";         // 1
echo intdiv(7, 2) . "<br>";  // 3
// DivisionByZeroError: Modulo by zero
// echo 7 % 0;

echo "<h2>Slajd 5: kolejność działań</h2>";
echo 2 + 3 * 4 . "<br>";           // 14
echo (2 + 3) * 4 . "<br>";         // 20
echo "Wynik: " . 2 + 3 . "<br>";   // Wynik: 5 (PHP 8: + before .)

echo "<h2>Slajd 6: skróty</h2>";
$total = 3;
$total += 5;
echo $total . "<br>";      // 8
$text = "Suma: ";
$text .= 22;
echo $text . "<br>";       // Suma: 22
$count = 0;
$count++;
$count++;
echo $count . "<br>";      // 2
$count--;
echo $count . "<br>";      // 1

echo "<h2>Slajd 7: == kontra ===</h2>";
var_dump("5" == 5);        // bool(true)
echo "<br>";
var_dump("5" === 5);       // bool(false)
echo "<br>";
var_dump(5 >= 5);          // bool(true)

echo "<h2>Slajd 8: logika</h2>";
$age = 20;
$hasTicket = false;
var_dump($age >= 18 && $hasTicket);   // bool(false)
echo "<br>";
var_dump($age >= 18 || $hasTicket);   // bool(true)
echo "<br>";
var_dump(!$hasTicket);                // bool(true)

<?php
// Lesson 5 (4Ti): operators. Live-coding target for slides 3-8 of 18_php_operatory/slajdy.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/operators.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: sześć działań</h2>";
echo 17 + 5 . "<br>";      // 22
echo 17 - 5 . "<br>";      // 12
echo 17 * 5 . "<br>";      // 85
echo 7 / 2 . "<br>";       // 3.5, division gives a float
echo 17 % 5 . "<br>";      // 2, the remainder
echo 2 ** 10 . "<br>";     // 1024, the power
var_dump(6 / 2);           // int(3): whole numbers that divide evenly stay int
echo "<br>";
var_dump(7 / 2);           // float(3.5)

echo "<h2>Slajd 4: reszta i dzielenie całkowite</h2>";
echo 10 % 2 . "<br>";        // 0, even
echo 7 % 2 . "<br>";         // 1, odd
echo intdiv(7, 2) . "<br>";  // 3, division without the remainder
// Division by zero stops the script with DivisionByZeroError. Uncomment live, read the message, comment back.
// echo 7 % 0;

echo "<h2>Slajd 5: kolejność działań</h2>";
echo 2 + 3 * 4 . "<br>";           // 14, multiplication first
echo (2 + 3) * 4 . "<br>";         // 20, the bracket wins
echo "Wynik: " . 2 + 3 . "<br>";   // Wynik: 5, since PHP 8 the dot binds weaker than plus

echo "<h2>Slajd 6: skróty</h2>";
$total = 3;
$total += 5;               // the same as $total = $total + 5
echo $total . "<br>";      // 8
$text = "Suma: ";
$text .= 22;               // append to the end of the text
echo $text . "<br>";       // Suma: 22
$count = 0;
$count++;
$count++;
echo $count . "<br>";      // 2
$count--;
echo $count . "<br>";      // 1

echo "<h2>Slajd 7: == kontra ===</h2>";
var_dump("5" == 5);        // bool(true): only the value is compared
echo "<br>";
var_dump("5" === 5);       // bool(false): the type differs, text vs number
echo "<br>";
var_dump(5 >= 5);          // bool(true)

echo "<h2>Slajd 8: logika</h2>";
$age = 20;
$hasTicket = false;
var_dump($age >= 18 && $hasTicket);   // bool(false): both must be true
echo "<br>";
var_dump($age >= 18 || $hasTicket);   // bool(true): one is enough
echo "<br>";
var_dump(!$hasTicket);                // bool(true): negation

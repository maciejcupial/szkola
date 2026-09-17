<?php
// Lesson 5 (4Ti): model solution of exercise 1 (slide 10), the file students name calculator.php.
// Expected: Suma: 22, Różnica: 12, Iloczyn: 85, Iloraz: 3.4, Reszta: 2, BMI: 23.15.
// For fast students: set $b = 0 and read the DivisionByZeroError, then put 5 back.
header("Content-Type: text/html; charset=UTF-8");

$a = 17;
$b = 5;
echo "Suma: " . ($a + $b) . "<br>";
echo "Różnica: " . ($a - $b) . "<br>";
echo "Iloczyn: " . $a * $b . "<br>";
echo "Iloraz: " . round($a / $b, 2) . "<br>";
echo "Reszta: " . $a % $b . "<br>";

$height = 1.80;
$weight = 75;
$bmi = round($weight / ($height ** 2), 2);
echo "BMI: " . $bmi;

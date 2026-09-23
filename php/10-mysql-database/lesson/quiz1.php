<?php
// Lesson 18 (4Ti 20), slide 8: two exam questions (EE.09 2020-01 q38, E.14 2019-06 q40).
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);

echo "<h2>1. Co powinno być w miejscu trzech kropek?</h2>";
// Slide version, fails in XAMPP: Warning: mysqli_connect(): (HY000/1045): Access denied ...
// $db = mysqli_connect("localhost", "root", "qwerty", "baza1");
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    // Answer B
    die("Błąd połączenia z bazą danych.");
}
echo "Połączenie udane, blok if został pominięty.<br>";   // Połączenie udane, blok if został pominięty.

echo "<h2>2. Jakie wartości muszą mieć zmienne?</h2>";
// Answer D
$a = "localhost";
$b = "root";
$c = "";
$d = "shop";
$db2 = mysqli_connect($a, $b, $c, $d) or die('Brak połączenia z serwerem MySQL.');
echo "Połączono z bazą $d.";   // Połączono z bazą shop.

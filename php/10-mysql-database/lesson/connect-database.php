<?php
// Lesson 18 (4Ti 20), slides 6-7 and 9: the first connection to MySQL.
// Needs MySQL running and the database shop (setup.sql).
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 18, slajd 7: sprawdzamy połączenie</h2>";

// PHP 8.1+ throws on failure; this brings back "returns false".
mysqli_report(MYSQLI_REPORT_OFF);

$db = mysqli_connect("localhost", "root", "", "shop");

if (!$db) {
    die("Błąd połączenia z bazą danych.");   // printed when MySQL is off or there is no database shop
}
echo "Połączono z bazą.";   // Połączono z bazą.

// Slide 9: swap in one of these, then restore.
// Warning: mysqli_connect(): (HY000/1045): Access denied for user 'root'@'localhost' ...
// $db = mysqli_connect("localhost", "root", "qwerty", "shop");
// Warning: mysqli_connect(): (HY000/1049): Unknown database 'shopp' ...
// $db = mysqli_connect("localhost", "root", "", "shopp");

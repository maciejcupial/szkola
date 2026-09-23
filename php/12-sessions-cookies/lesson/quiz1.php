<?php
// Lesson 26, slides 2-3: warm-up answers as code.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 26, slajd 2, pytanie 1: z jakiej tablicy odbieramy dane z post?</h2>";
var_dump($_POST);   // array(0) {}
echo "<br>";
$userName = $_POST["userName"] ?? "brak";
echo htmlspecialchars($userName) . "<br>";   // brak

echo "<h2>Lekcja 26, slajd 2, pytanie 2: dlaczego empty(\"0\") to pułapka?</h2>";
var_dump(empty(""));    // bool(true)
echo "<br>";
var_dump(empty("0"));   // bool(true): a typed 0 looks blank
echo "<br>";
var_dump(empty("5"));   // bool(false)
echo "<br>";
$age = "0";
var_dump($age === "");   // bool(false)
echo "<br>";

echo "<h2>Lekcja 26, slajd 2, pytanie 3: require dla połączenia z bazą</h2>";
echo "require zatrzymuje stronę, include idzie dalej bez bazy<br>";   // require zatrzymuje stronę, ...

echo "<h2>Lekcja 26, slajd 3, pytanie 1: co robi include \"header.php\";?</h2>";
include "header.php";   // Nagłówek z pliku header.php
echo "Treść strony pod nagłówkiem<br>";   // Treść strony pod nagłówkiem

echo "<h2>Lekcja 26, slajd 3, pytanie 2: brak którego pliku zatrzyma stronę?</h2>";
// Warning: Failed to open stream, the page goes on
// include "missing.php";
// Fatal error: Failed opening required 'missing.php'
// require "missing.php";
echo "Oba wiersze z brakującym plikiem są zakomentowane, strona działa.<br>";

echo "<h2>Lekcja 26, slajd 3, pytanie 3: dlaczego require_once dla functions.php?</h2>";
require_once "functions.php";
require_once "functions.php";   // skipped, already loaded
echo greet("Jan") . "<br>";     // Cześć, Jan!
// Fatal error: Cannot redeclare function greet()
// require "functions.php";

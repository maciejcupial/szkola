<?php
// Lesson 25, slides 3-5 and 7: include, require, require_once.
// No database needed; the database version is product-list.php.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 25, slajd 3: jedna strona z trzech plików</h2>";
include "header.php";    // <header><h1>Sklep</h1></header>
$products = [
    ["name" => "Kubek", "price" => 19.90],
    ["name" => "Długopis", "price" => 4.20],
];
foreach ($products as $product) {
    echo htmlspecialchars($product["name"]) . " - " . number_format($product["price"], 2) . " zł<br>";
}
// Kubek - 19.90 zł
// Długopis - 4.20 zł
include "footer.php";    // <footer>Kontakt: sklep@example.com</footer>

echo "<h2>Lekcja 25, slajd 4: brakujący plik, include kontra require</h2>";
echo "Otwórz missing-include.php, a potem missing-require.php i porównaj komunikaty.<br>";

echo "<h2>Lekcja 25, slajd 5: require_once, ten sam plik tylko raz</h2>";
require_once "functions.php";
require_once "functions.php";            // skipped, already loaded
echo formatPrice(19.9) . "<br>";         // 19.90 zł
// Fatal error: Cannot redeclare function formatPrice()
// require "functions.php";
echo "Drugie dołączenie functions.php zostało pominięte, strona działa.<br>";

echo "<h2>Lekcja 25, slajd 7: ścieżka z __DIR__</h2>";
// __DIR__ = this file's folder, so the path works from anywhere.
include __DIR__ . "/footer.php";         // <footer>Kontakt: sklep@example.com</footer>

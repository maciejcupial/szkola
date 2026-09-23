<?php
// test: skip
// Lesson 26, slides 2, 4-5: error kinds.
// Warns on purpose (Undefined variable $quantity).
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 26, slajd 2: rozgrzewka, include i require</h2>";
echo "include bez pliku: Warning, strona jedzie dalej.<br>";
echo "require bez pliku: Fatal error, strona zatrzymuje się w tym miejscu.<br>";
echo "require_once: ten sam plik z funkcjami nie wejdzie drugi raz.<br>";

echo "<h2>Lekcja 26, slajd 4: cztery rodzaje błędów</h2>";

// Parse error: syntax error, unexpected variable "$discount" (whole page blank)
// $price = 19.90
// $discount = 0.10;
echo "1. Błąd składni: zakomentowany, inaczej strona byłaby pusta.<br>";

$price = 19.90;
echo "2. Ostrzeżenie: ";
// Warning, then Cena po rabacie: 19.9 zł
echo "Cena po rabacie: " . ($price - $quantity) . " zł<br>";

// Fatal error: Uncaught Error: Call to undefined function calculateTax()
// echo calculateTax($price);
echo "3. Błąd krytyczny: zakomentowany, inaczej strona zatrzymałaby się tutaj.<br>";

try {
    echo calculateTax($price);
} catch (Error $e) {
    echo "4. Wyjątek złapany: " . htmlspecialchars($e->getMessage()) . "<br>";
    // 4. Wyjątek złapany: Call to undefined function calculateTax()
}

echo "<h2>Lekcja 26, slajd 5: od ostrzeżenia do błędu krytycznego</h2>";
echo "Doszliśmy do końca strony: ostrzeżenie i złapany wyjątek jej nie zatrzymały.<br>";

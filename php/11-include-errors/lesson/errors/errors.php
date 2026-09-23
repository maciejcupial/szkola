<?php
// test: skip
// Lesson 26, slides 2, 4-5: error kinds.
// Warns on purpose (Undefined variable $quantity).
header("Content-Type: text/html; charset=UTF-8");

// Parse error: syntax error, unexpected variable "$discount" (whole page blank)
// $price = 19.90
// $discount = 0.10;

$price = 19.90;
// Warning, then Cena po rabacie: 19.9 zł
$priceAfterDiscount = $price - $quantity;

// Fatal error: Uncaught Error: Call to undefined function calculateTax()
// $tax = calculateTax($price);

$caughtMessage = "";
try {
    $tax = calculateTax($price);
} catch (Error $e) {
    $caughtMessage = $e->getMessage();    // Call to undefined function calculateTax()
}
?>
<h2>Lekcja 26, slajd 2: rozgrzewka, include i require</h2>
<p>include bez pliku: Warning, strona jedzie dalej.</p>
<p>require bez pliku: Fatal error, strona zatrzymuje się w tym miejscu.</p>
<p>require_once: ten sam plik z funkcjami nie wejdzie drugi raz.</p>

<h2>Lekcja 26, slajd 4: cztery rodzaje błędów</h2>
<p>1. Błąd składni: zakomentowany, inaczej strona byłaby pusta.</p>
<p>2. Ostrzeżenie: Cena po rabacie: <?= $priceAfterDiscount ?> zł</p>
<p>3. Błąd krytyczny: zakomentowany, inaczej strona zatrzymałaby się tutaj.</p>
<p>4. Wyjątek złapany: <?= htmlspecialchars($caughtMessage) ?></p>

<h2>Lekcja 26, slajd 5: od ostrzeżenia do błędu krytycznego</h2>
<p>Doszliśmy do końca strony: ostrzeżenie i złapany wyjątek jej nie zatrzymały.</p>

<?php
// Lesson 26, slide 7: try...catch around divide(10, 0).
header("Content-Type: text/html; charset=UTF-8");

function divide($a, $b) {
    return $a / $b;   // by 0: DivisionByZeroError since PHP 8
}

$firstResult = divide(10, 2);   // 5

try {
    $message = "Wynik: " . divide(10, 0);   // throws, jumps into catch
} catch (DivisionByZeroError $e) {
    $message = "Błąd: " . $e->getMessage();   // Błąd: Division by zero
}

// Fatal error: Uncaught DivisionByZeroError: Division by zero
// $message = divide(10, 0);
?>
<h2>Lekcja 26, slajd 7: łapiemy błąd</h2>
<p><?= $firstResult ?></p>
<p><?= htmlspecialchars($message) ?></p>
<p>Reszta strony działa dalej.</p>

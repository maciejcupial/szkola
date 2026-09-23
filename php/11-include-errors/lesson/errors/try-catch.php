<?php
// Lesson 26, slide 7: try...catch around divide(10, 0).
header("Content-Type: text/html; charset=UTF-8");

function divide($a, $b) {
    return $a / $b;   // by 0: DivisionByZeroError since PHP 8
}

echo "<h2>Lekcja 26, slajd 7: łapiemy błąd</h2>";
echo divide(10, 2) . "<br>";   // 5

try {
    echo divide(10, 0) . "<br>";   // throws, jumps into catch
    echo "Ta linia się nie wykona.<br>";
} catch (DivisionByZeroError $e) {
    echo "Błąd: " . htmlspecialchars($e->getMessage()) . "<br>";   // Błąd: Division by zero
}

echo "Reszta strony działa dalej.<br>";   // Reszta strony działa dalej.

// Fatal error: Uncaught DivisionByZeroError: Division by zero
// echo divide(10, 0);

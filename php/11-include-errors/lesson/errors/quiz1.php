<?php
// Lesson 26, slide 8: two exam questions (EE.09 2022 zad. 27, E.14 2016 zad. 39).
// Question 1 needs MySQL running (no database needed).
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Numer błędu i jego opis: mysqli_errno i mysqli_error</h2>";
// Since PHP 8.1 a failed query throws; this restores returning false.
mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    echo "Brak połączenia: " . htmlspecialchars(mysqli_connect_error()) . "<br>";
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM products");   // fails: no database chosen
if (!$result) {
    echo "Numer błędu: " . mysqli_errno($conn) . "<br>";                     // 1046
    // No database selected
    echo "Opis błędu: " . htmlspecialchars(mysqli_error($conn)) . "<br>";
}
echo "Odpowiedź B: funkcje mysqli_error i mysqli_errno.<br>";
mysqli_close($conn);

echo "<h2>2. Gdzie trafiają błędy interpretacji kodu PHP?</h2>";
echo "Odpowiedź A: do logu, pod warunkiem ustawienia odpowiedniego parametru w php.ini.<br>";

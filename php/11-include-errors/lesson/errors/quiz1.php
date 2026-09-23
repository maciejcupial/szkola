<?php
// Lesson 26, slide 8: two exam questions (EE.09 2022 zad. 27, E.14 2016 zad. 39).
// Question 1 needs MySQL running (no database needed).
header("Content-Type: text/html; charset=UTF-8");

// Since PHP 8.1 a failed query throws; this restores returning false.
mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Brak połączenia: " . htmlspecialchars(mysqli_connect_error()));
}

$errorNumber = 0;
$errorText = "";
$result = mysqli_query($conn, "SELECT * FROM products");   // fails: no database chosen
if (!$result) {
    $errorNumber = mysqli_errno($conn);    // 1046
    $errorText = mysqli_error($conn);      // No database selected
}
mysqli_close($conn);
?>
<h2>1. Numer błędu i jego opis: mysqli_errno i mysqli_error</h2>
<?php if ($errorNumber !== 0): ?>
  <p>Numer błędu: <?= $errorNumber ?></p>
  <p>Opis błędu: <?= htmlspecialchars($errorText) ?></p>
<?php endif; ?>
<p>Odpowiedź B: funkcje mysqli_error i mysqli_errno.</p>

<h2>2. Gdzie trafiają błędy interpretacji kodu PHP?</h2>
<p>Odpowiedź A: do logu, pod warunkiem ustawienia odpowiedniego parametru w php.ini.</p>

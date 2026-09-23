<?php
// Task 1 of 5: clean up a product name with trim(), strtoupper() and str_replace().
// Expected:
// Przed trim(): [ klawiatura mechaniczna ], długość 24
// Po trim(): [klawiatura mechaniczna], długość 22
// Wielkimi literami: KLAWIATURA MECHANICZNA
// Po zamianie: klawiatura bezprzewodowa
header("Content-Type: text/html; charset=UTF-8");

$text = " klawiatura mechaniczna ";

// TU ZMIEŃ: zapisz do $trimmed wynik trim($text)
$trimmed = "";
// TU ZMIEŃ: zapisz do $upper wynik strtoupper($trimmed)
$upper = "";
// TU ZMIEŃ: zapisz do $replaced wynik str_replace(), „mechaniczna” na „bezprzewodowa”
$replaced = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: porządki w napisie</title>
</head>
<body>
  <h1>Zadanie 1: porządki w napisie</h1>
  <p>Usuń spacje z brzegów nazwy, zamień ją na wielkie litery, a potem zamień słowo „mechaniczna”
    na „bezprzewodowa”. Linii z echo nie ruszaj.</p>
  <p>
    <?php
        echo "Przed trim(): [" . htmlspecialchars($text) . "], długość " . strlen($text) . "<br>";
        echo "Po trim(): [" . htmlspecialchars($trimmed) . "], długość " . strlen($trimmed) . "<br>";
        echo "Wielkimi literami: " . htmlspecialchars($upper) . "<br>";
        echo "Po zamianie: " . htmlspecialchars($replaced);
    ?>
  </p>
</body>
</html>

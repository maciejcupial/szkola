<?php
// Task 2 of 5: a shop receipt with round(), var_dump() and date().
// Expected:
// Do zapłaty dokładnie: 47.456 zł
// Do zapłaty: 47.46 zł
// Do pełnej złotówki: 47 zł
// round(2.5) = 3, round(2.49) = 2
// float(47)
// Data paragonu: today's date and time in the format DD.MM.RRRR GG:MM, for example 23.09.2026 10:15
header("Content-Type: text/html; charset=UTF-8");

$total = 47.456;

// TU ZMIEŃ: zapisz do $totalCents kwotę zaokrągloną do dwóch miejsc po przecinku
$totalCents = 0;
// TU ZMIEŃ: zapisz do $totalWhole kwotę zaokrągloną do pełnej złotówki
$totalWhole = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: paragon</title>
</head>
<body>
  <h1>Zadanie 2: paragon</h1>
  <p>Zaokrąglij kwotę do groszy i do pełnej złotówki, sprawdź typ wyniku przez var_dump()
    i dopisz datę paragonu.</p>
  <p>
    <?php
        echo "Do zapłaty dokładnie: " . $total . " zł<br>";
        echo "Do zapłaty: " . $totalCents . " zł<br>";
        echo "Do pełnej złotówki: " . $totalWhole . " zł<br>";

        // TU ZMIEŃ: w miejsce dwóch zer wpisz round(2.5) i round(2.49)
        echo "round(2.5) = " . 0 . ", round(2.49) = " . 0 . "<br>";

        // TU ZMIEŃ: wywołaj var_dump() dla $totalWhole
        echo "<br>";

        // d day, m month, Y year, H hour, i minutes
        // TU ZMIEŃ: w miejsce kresek wpisz date() z formatem dzień.miesiąc.rok godzina:minuty
        echo "Data paragonu: " . "--.--.---- --:--";
    ?>
  </p>
</body>
</html>

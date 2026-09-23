<?php
// Task 3 of 6: free cinema seats with for, continue and break.
// Expected: "Wolne miejsca: 1 2 5 6 7" and under it "Znaleziono 5 z 5 miejsc."
header("Content-Type: text/html; charset=UTF-8");

$takenSeats = [3, 4, 8, 15];
$wanted = 5;
$found = 0;
$freeSeats = [];

// in_array($seat, $takenSeats) is true for a sold seat.

// TU ZMIEŃ: pętla for od 1 do 20 z continue dla zajętych miejsc, wolne dopisz do $freeSeats
// i zwiększ $found, a po znalezieniu $wanted miejsc zakończ pętlę przez break
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: wolne miejsca w kinie</title>
</head>
<body>
  <h1>Zadanie 3: wolne miejsca w kinie</h1>
  <p>W rzędzie jest 20 miejsc. Przejdź pętlą <code>for</code> po numerach od 1 do 20. Zajęte miejsca
    pomiń instrukcją <code>continue</code>, wolne wypisz. Gdy znajdziesz <?= $wanted ?> wolnych,
    zakończ pętlę instrukcją <code>break</code>.</p>
  <p>Wolne miejsca:
    <?php foreach ($freeSeats as $seat): ?>
      <?= $seat ?>
    <?php endforeach; ?>
  </p>
  <p>Znaleziono <?= $found ?> z <?= $wanted ?> miejsc.</p>
</body>
</html>

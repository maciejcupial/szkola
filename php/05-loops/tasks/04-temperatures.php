<?php
// Task 4 of 6: a week of temperatures with foreach.
// Expected: "Dzień 1: 12 °C", "Dzień 2: 15 °C (ciepło)", "Dzień 3: 9 °C", "Dzień 4: 18 °C (ciepło)",
// "Dzień 5: 21 °C (ciepło)", "Dzień 6: 7 °C", "Dzień 7: 14 °C",
// and under it "Ciepłych dni: 3" and "Średnia temperatura: 13.71 °C".
header("Content-Type: text/html; charset=UTF-8");

$temperatures = [12, 15, 9, 18, 21, 7, 14];
$warmDays = 0;
$average = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: temperatury tygodnia</title>
</head>
<body>
  <h1>Zadanie 4: temperatury tygodnia</h1>
  <p>Wypisz pętlą <code>foreach</code> temperaturę każdego dnia jako „Dzień numer: temperatura °C”.
    Numeruj od 1, nie od 0. Przy dniach z temperaturą 15 °C lub wyższą dopisz „(ciepło)” i policz
    je w <code>$warmDays</code>. Pod listą pokaż średnią z tygodnia.</p>
  <ul>
<?php
// TU ZMIEŃ: pętla foreach z numerem dnia, dopiskiem „(ciepło)” i liczeniem $warmDays

// TU ZMIEŃ: pod pętlą policz $average z array_sum(), count() i round()
?>
  </ul>
  <p>Ciepłych dni: <?= $warmDays ?></p>
  <p>Średnia temperatura: <?= $average ?> °C</p>
</body>
</html>

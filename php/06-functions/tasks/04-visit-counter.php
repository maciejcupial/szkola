<?php
// Task 4 of 5: addVisit($visits) returns visits + 1; save the result into the global $visits.
// Expected:
//   Przed wywołaniem: 10
//   Funkcja zwróciła: 11
//   Po samym wywołaniu: 10
//   Po zapisaniu wyniku: 11
header("Content-Type: text/html; charset=UTF-8");

$visits = 10;

// Inside the body $visits is a local copy, not the global variable.
function addVisit($visits) {
    // TU ZMIEŃ: zwiększ lokalne $visits o 1 i zwróć je przez return (zamiast zera)
    return 0;
}

$before = $visits;
$returned = addVisit($visits);
$afterCallOnly = $visits;

// TU ZMIEŃ: zapisz do globalnego $visits to, co zwraca addVisit($visits)

$afterSaving = $visits;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: licznik odwiedzin</title>
</head>
<body>
  <h1>Zadanie 4 z 5: licznik odwiedzin</h1>
  <p>
    Dokończ funkcję <code>addVisit($visits)</code>, a potem zapisz jej wynik z powrotem do zmiennej
    <code>$visits</code> poza funkcją. Zastanów się, dlaczego trzecia liczba się nie zmienia.
  </p>
  <p>Przed wywołaniem: <?= $before ?></p>
  <p>Funkcja zwróciła: <?= $returned ?></p>
  <p>Po samym wywołaniu: <?= $afterCallOnly ?></p>
  <p>Po zapisaniu wyniku: <?= $afterSaving ?></p>
</body>
</html>

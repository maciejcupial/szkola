<?php
// Task 4 of 6: catch the division by zero with try...catch, round to 2 decimals.
// Expected:
//   1A: średnia 4.5
//   2B: średnia 3.67
//   4C: Błąd: Division by zero
//   3D: średnia 5
//   Koniec raportu.
header("Content-Type: text/html; charset=UTF-8");

// Empty list: count() is 0, so DivisionByZeroError.
function average($grades) {
    return array_sum($grades) / count($grades);
}

$classes = [
    "1A" => [5, 4, 4, 5],
    "2B" => [3, 4, 4],
    "4C" => [],
    "3D" => [5, 5],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: raport ocen</title>
</head>
<body>
  <h1>Raport średnich</h1>
  <p>Zadanie 4: policz średnią każdej klasy, a błąd dzielenia przez zero złap w try...catch.</p>
  <ul>
    <?php
    foreach ($classes as $className => $grades) {
        // TU ZMIEŃ: wywołaj average($grades) w try, błąd złap w catch
        echo "<li>" . htmlspecialchars($className . ": średnia ?") . "</li>";
    }
    ?>
  </ul>
  <p>Koniec raportu.</p>
</body>
</html>

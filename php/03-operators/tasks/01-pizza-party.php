<?php
// Task 1 of 5: split pizzas between friends with arithmetic operators.
// Expected:
//   Kawałków razem: 24
//   Każdy dostaje: 4
//   Zostaje na talerzu: 4
//   Koszt razem: 127.5 zł
//   Na osobę: 25.5 zł
header("Content-Type: text/html; charset=UTF-8");

$pizzas = 3;
$slicesPerPizza = 8;
$people = 5;
$pizzaPrice = 42.50;

// TU ZMIEŃ: wszystkie kawałki (mnożenie)
$allSlices = 0;

// TU ZMIEŃ: ile pełnych kawałków dostaje każdy? intdiv() dzieli bez reszty
$slicesEach = 0;

// TU ZMIEŃ: ile kawałków zostaje? To reszta z dzielenia, operator %
$leftover = 0;

// TU ZMIEŃ: koszt wszystkich pizz
$totalCost = 0;

// TU ZMIEŃ: koszt na osobę, zaokrąglony do 2 miejsc funkcją round(..., 2)
$costEach = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: pizza</title>
</head>
<body>
  <h1>Zadanie 1: dzielimy pizzę</h1>
  <p>
    Trzy pizze po 8 kawałków, pięć osób, pizza kosztuje 42,50 zł. Policz, ile jest kawałków,
    ile pełnych kawałków dostaje każdy, ile zostaje i ile płaci jedna osoba.
  </p>

  <p>Kawałków razem: <?= htmlspecialchars($allSlices) ?></p>
  <p>Każdy dostaje: <?= htmlspecialchars($slicesEach) ?></p>
  <p>Zostaje na talerzu: <?= htmlspecialchars($leftover) ?></p>
  <p>Koszt razem: <?= htmlspecialchars($totalCost) ?> zł</p>
  <p>Na osobę: <?= htmlspecialchars($costEach) ?> zł</p>
</body>
</html>

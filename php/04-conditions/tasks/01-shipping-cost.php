<?php
// Task 1 of 5: shipping cost with an elseif ladder.
// Expected: Zamówienie za 120 zł: dostawa 9 zł, razem 129 zł.
// Also: 250 (0 zł, 250 zł), 60 (14 zł, 74 zł), 30 (19 zł, 49 zł).
header("Content-Type: text/html; charset=UTF-8");

$orderTotal = 120;

$shippingCost = 0;

// TU ZMIEŃ: drabinka if ... elseif ... else, która ustawia $shippingCost według progów

$total = $orderTotal + $shippingCost;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: koszt dostawy</title>
</head>
<body>
  <h1>Zadanie 1: koszt dostawy</h1>
  <p>Od 200 zł dostawa jest darmowa, od 100 zł kosztuje 9 zł, od 50 zł 14 zł, a poniżej 50 zł 19 zł.
    Napisz drabinkę <code>elseif</code>, która ustawi <code>$shippingCost</code>.</p>
  <p>Zamówienie za <?= $orderTotal ?> zł: dostawa <?= $shippingCost ?> zł, razem <?= $total ?> zł.</p>
</body>
</html>

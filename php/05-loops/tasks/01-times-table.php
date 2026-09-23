<?php
// Task 1 of 6: one row of the multiplication table with for.
// Expected: a list from "7 × 1 = 7", "7 × 2 = 14" ... to "7 × 10 = 70".
header("Content-Type: text/html; charset=UTF-8");

$number = 7;
$results = [];

// TU ZMIEŃ: pętla for od 1 do 10, która zapisuje iloczyn pod kluczem mnożnika:
// $results[1] = 7, $results[2] = 14 ... $results[10] = 70
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: tabliczka mnożenia</title>
</head>
<body>
  <h1>Zadanie 1: tabliczka mnożenia przez <?= $number ?></h1>
  <p>Napisz pętlę <code>for</code>, która wypisze dziesięć linii: od „<?= $number ?> × 1” do
    „<?= $number ?> × 10”, każdą z wynikiem, jako element listy <code>&lt;li&gt;</code>.</p>
  <ul>
    <?php foreach ($results as $factor => $result): ?>
      <li><?= $number ?> × <?= $factor ?> = <?= $result ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

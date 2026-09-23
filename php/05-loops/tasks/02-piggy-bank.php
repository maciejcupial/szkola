<?php
// Task 2 of 6: piggy bank with while.
// Expected: "Tydzień 1: 35 zł", "Tydzień 2: 70 zł", "Tydzień 3: 105 zł", "Tydzień 4: 140 zł",
// "Tydzień 5: 175 zł", "Tydzień 6: 210 zł", and under it "Cel 200 zł osiągnięty po 6 tygodniach."
header("Content-Type: text/html; charset=UTF-8");

$goal = 200;
$weekly = 35;
$savings = 0;
$weeks = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: skarbonka</title>
</head>
<body>
  <h1>Zadanie 2: skarbonka</h1>
  <p>Co tydzień odkładasz <?= $weekly ?> zł. Napisz pętlę <code>while</code>, która działa, dopóki
    oszczędności są mniejsze niż <?= $goal ?> zł, i dla każdego tygodnia wypisuje linię
    „Tydzień numer: kwota zł”.</p>
  <ul>
<?php
// TU ZMIEŃ: pętla while, która dodaje kolejne tygodnie, dopóki $savings < $goal
?>
  </ul>
  <p>Cel <?= $goal ?> zł osiągnięty po <?= $weeks ?> tygodniach.</p>
</body>
</html>

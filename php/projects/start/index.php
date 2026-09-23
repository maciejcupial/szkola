<?php
// First PHP page: PHP logic on top, HTML template below.

// TU ZMIEŃ: wpisz swoje imię w cudzysłowie
$name = "Uczeń";

// "Y" = four-digit year, e.g. "2026"
$year = date("Y");

// TU ZMIEŃ: wstaw własne liczby oddzielone przecinkami
$numbers = [3, 7, 12];

$sum = array_sum($numbers);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TU ZMIEŃ: tytuł widoczny na karcie przeglądarki -->
  <title>Pierwszy skrypt PHP</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <!-- htmlspecialchars() stops typed text from becoming HTML -->
  <h1>Cześć, <?= htmlspecialchars($name) ?>!</h1>

  <p>Mamy rok <?= htmlspecialchars($year) ?>.</p>

  <!-- implode() joins array values with the separator -->
  <p>
    Suma liczb <?= htmlspecialchars(implode(", ", $numbers)) ?> to
    <strong><?= htmlspecialchars($sum) ?></strong>.
  </p>

  <h2>Pętla</h2>
  <ul>
    <?php
        // Template syntax: a colon opens the loop, endforeach closes it.
        foreach ($numbers as $number):
    ?>
      <li><?= htmlspecialchars($number) ?> do kwadratu = <?= htmlspecialchars($number * $number) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

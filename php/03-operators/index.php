<?php
// Operators: a concert ticket office. PHP lesson 03.

header("Content-Type: text/html; charset=UTF-8");

$ticketPrice = 89;
$tickets = 3;
$serviceFee = 15;

$total = $ticketPrice * $tickets;
$total += $serviceFee;

// / can give many decimals; round() keeps 2.
$perPerson = round($total / $tickets, 2);

// 250 = 20 * 12 + 10: intdiv() gives 20, % gives 10.
$seats = 250;
$rowLength = 12;
$fullRows = intdiv($seats, $rowLength);
$lastRowSeats = $seats % $rowLength;

$precedenceA = 2 + 3 * 4;
$precedenceB = (2 + 3) * 4;
$precedenceC = 2 * 3 ** 2;

$summary = "Zamówienie:";
$summary .= " " . $tickets . " bilety";
$summary .= ", razem " . $total . " zł";

$views = 0;
$views++;
$views++;
$views--;

// Form data is always text. === also compares the type.
$ticketsFromForm = "3";
$looseEqual = $ticketsFromForm == $tickets;
$strictEqual = $ticketsFromForm === $tickets;

// Comparisons run before &&, so no brackets needed.
$age = 17;
$hasTicket = true;
$isStaff = false;
$canEnterAdultZone = $age >= 18 && $hasTicket;
$canEnter = $hasTicket || $isStaff;
$isGuest = !$isStaff;

// TU ZMIEŃ: dopisz własne działanie, na przykład cenę dla 5 biletów z opłatą serwisową
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operatory w PHP</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 640px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <h1>Kasa biletowa</h1>

  <h2>Działania</h2>
  <p>Bilety: <?= htmlspecialchars($tickets) ?> × <?= htmlspecialchars($ticketPrice) ?> zł</p>
  <p>Razem z opłatą serwisową: <?= htmlspecialchars($total) ?> zł</p>
  <p>Na osobę: <?= htmlspecialchars($perPerson) ?> zł</p>
  <p>
    Pełnych rzędów: <?= htmlspecialchars($fullRows) ?>,
    w ostatnim: <?= htmlspecialchars($lastRowSeats) ?>
  </p>
  <p>
    2 + 3 * 4 = <?= htmlspecialchars($precedenceA) ?>,
    (2 + 3) * 4 = <?= htmlspecialchars($precedenceB) ?>,
    2 * 3 ** 2 = <?= htmlspecialchars($precedenceC) ?>
  </p>

  <h2>Skróty</h2>
  <p><?= htmlspecialchars($summary) ?></p>
  <p>Licznik odsłon: <?= htmlspecialchars($views) ?></p>

  <!-- var_dump() shows bool(true); echo would print 1. -->
  <h2>Porównania</h2>
  <p>"3" == 3: <?php var_dump($looseEqual); ?></p>
  <p>"3" === 3: <?php var_dump($strictEqual); ?></p>

  <h2>Logika</h2>
  <p>Wejdzie do strefy 18+ (18 lat i bilet): <?php var_dump($canEnterAdultZone); ?></p>
  <p>Może wejść (bilet lub obsługa): <?php var_dump($canEnter); ?></p>
  <p>Jest gościem (nie obsługa): <?php var_dump($isGuest); ?></p>
</body>
</html>

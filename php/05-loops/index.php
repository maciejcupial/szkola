<?php
// School shop page built with every PHP loop.
header("Content-Type: text/html; charset=UTF-8");

// for: bun price list
$bunPrice = 2.5;
$bunPrices = [];
for ($count = 1; $count <= 5; $count++) {
    $bunPrices[$count] = $count * $bunPrice;
}
// 1 => 2.5, 2 => 5, 3 => 7.5, 4 => 10, 5 => 12.5

// while: how many buns for 12 zł
$money = 12;
$buns = 0;
while ($money >= $bunPrice) {
    $money -= $bunPrice;        // without this line the loop never ends
    $buns++;
}
// 4 buns, 2 zł left

// do...while: the body runs once even though the condition is false
$queue = 0;
$queueStates = [];
do {
    $queueStates[] = $queue;
} while ($queue > 0);
// [0]

// break and continue: odd ticket numbers up to 9
$tickets = [];
for ($ticket = 1; $ticket <= 20; $ticket++) {
    if ($ticket % 2 === 0) {
        continue;
    }
    if ($ticket > 9) {
        break;
    }
    $tickets[] = $ticket;
}
// [1, 3, 5, 7, 9]

$menu = ["kanapka z serem", "drożdżówka", "sok jabłkowy"];
// 1. kanapka z serem, 2. drożdżówka, 3. sok jabłkowy

$prices = [
    "kanapka z serem" => 6,
    "drożdżówka" => 2.5,
    "sałatka" => 11,
];
// kanapka z serem | 6 zł, drożdżówka | 2.5 zł, sałatka | 11 zł (pink row)

$orders = [
    ["group" => "1A", "items" => ["kanapka z serem", "sok jabłkowy"]],
    ["group" => "2B", "items" => ["drożdżówka", "drożdżówka", "sałatka"]],
];
// 1A | kanapka z serem; sok jabłkowy; | 2
// 2B | drożdżówka; drożdżówka; sałatka; | 3

// TU ZMIEŃ: dopisz własną pętlę, która dodaje elementy do $myList, na przykład ulubione gry.
$myList = [];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sklepik szkolny: pętle w PHP</title>
  <style>
    td, th {
      border: 1px solid #999;
      padding: 4px 8px;
    }
    .expensive {
      background: #ffd0d0;
    }
  </style>
</head>
<body>
  <h1>Sklepik szkolny</h1>

  <h2>for: cennik drożdżówek</h2>
  <table>
    <tr><th>Sztuk</th><th>Cena</th></tr>
    <?php foreach ($bunPrices as $count => $price): ?>
      <tr><td><?= $count ?></td><td><?= $price ?> zł</td></tr>
    <?php endforeach; ?>
  </table>

  <h2>while: na ile drożdżówek starczy 12 zł?</h2>
  <p>Kupisz <?= $buns ?> drożdżówki, zostanie <?= $money ?> zł.</p>

  <h2>do...while: kolejka do kasy</h2>
  <?php foreach ($queueStates as $state): ?>
    <p>Kasa otwarta, w kolejce: <?= $state ?></p>
  <?php endforeach; ?>

  <h2>break i continue: szukamy numerka</h2>
  <p>
    <?php foreach ($tickets as $ticket): ?>
      <?= $ticket ?>
    <?php endforeach; ?>
  </p>

  <h2>foreach: menu dnia</h2>
  <ul>
    <?php foreach ($menu as $item): ?>
      <li><?= htmlspecialchars($item) ?></li>
    <?php endforeach; ?>
  </ul>
  <!-- Keys count from 0. -->
  <?php foreach ($menu as $index => $item): ?>
    <?= $index + 1 ?>. <?= htmlspecialchars($item) ?><br>
  <?php endforeach; ?>

  <h2>foreach z kluczem: cennik</h2>
  <table>
    <tr><th>Produkt</th><th>Cena</th></tr>
    <?php foreach ($prices as $product => $price): ?>
      <tr class="<?= $price > 10 ? "expensive" : "" ?>">
        <td><?= htmlspecialchars($product) ?></td><td><?= $price ?> zł</td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h2>Pętla w pętli: zamówienia klas</h2>
  <table>
    <tr><th>Klasa</th><th>Zamówienie</th><th>Liczba pozycji</th></tr>
    <!-- $order (one order), not $orders (the whole array). -->
    <?php foreach ($orders as $order): ?>
      <tr>
        <td><?= htmlspecialchars($order["group"]) ?></td>
        <td>
          <?php foreach ($order["items"] as $item): ?>
            <?= htmlspecialchars($item) ?>;
          <?php endforeach; ?>
        </td>
        <td><?= count($order["items"]) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h2>Twoja pętla</h2>
  <ul>
    <?php foreach ($myList as $myItem): ?>
      <li><?= htmlspecialchars($myItem) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

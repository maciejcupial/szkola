<?php
// School shop page built with every PHP loop.
header("Content-Type: text/html; charset=UTF-8");
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
<?php
$bunPrice = 2.5;
echo "<table>";
echo "<tr><th>Sztuk</th><th>Cena</th></tr>";
for ($count = 1; $count <= 5; $count++) {
    echo "<tr><td>$count</td><td>" . $count * $bunPrice . " zł</td></tr>";
}
echo "</table>";
// Rows: 1 | 2.5 zł, 2 | 5 zł, 3 | 7.5 zł, 4 | 10 zł, 5 | 12.5 zł
?>

  <h2>while: na ile drożdżówek starczy 12 zł?</h2>
<?php
$money = 12;
$buns = 0;
while ($money >= $bunPrice) {
    $money -= $bunPrice;        // without this line the loop never ends
    $buns++;
}
echo "<p>Kupisz $buns drożdżówki, zostanie $money zł.</p>";
// Kupisz 4 drożdżówki, zostanie 2 zł.
?>

  <h2>do...while: kolejka do kasy</h2>
<?php
$queue = 0;
do {
    echo "<p>Kasa otwarta, w kolejce: $queue</p>";     // printed once
} while ($queue > 0);
?>

  <h2>break i continue: szukamy numerka</h2>
<?php
echo "<p>";
for ($ticket = 1; $ticket <= 20; $ticket++) {
    if ($ticket % 2 === 0) {
        continue;
    }
    if ($ticket > 9) {
        break;
    }
    echo $ticket . " ";
}
echo "</p>";
// 1 3 5 7 9
?>

  <h2>foreach: menu dnia</h2>
<?php
$menu = ["kanapka z serem", "drożdżówka", "sok jabłkowy"];
echo "<ul>";
foreach ($menu as $item) {
    echo "<li>" . htmlspecialchars($item) . "</li>";
}
echo "</ul>";
// Keys count from 0.
foreach ($menu as $index => $item) {
    echo ($index + 1) . ". " . htmlspecialchars($item) . "<br>";
}
// 1. kanapka z serem
// 2. drożdżówka
// 3. sok jabłkowy
?>

  <h2>foreach z kluczem: cennik</h2>
<?php
$prices = [
    "kanapka z serem" => 6,
    "drożdżówka" => 2.5,
    "sałatka" => 11,
];
echo "<table>";
echo "<tr><th>Produkt</th><th>Cena</th></tr>";
foreach ($prices as $product => $price) {
    $rowClass = $price > 10 ? ' class="expensive"' : '';
    echo "<tr$rowClass><td>" . htmlspecialchars($product) . "</td><td>$price zł</td></tr>";
}
echo "</table>";
// kanapka z serem | 6 zł, drożdżówka | 2.5 zł, sałatka | 11 zł (pink row)
?>

  <h2>Pętla w pętli: zamówienia klas</h2>
<?php
$orders = [
    ["group" => "1A", "items" => ["kanapka z serem", "sok jabłkowy"]],
    ["group" => "2B", "items" => ["drożdżówka", "drożdżówka", "sałatka"]],
];
echo "<table>";
echo "<tr><th>Klasa</th><th>Zamówienie</th><th>Liczba pozycji</th></tr>";
foreach ($orders as $order) {
    // $order (one order), not $orders (the whole array).
    echo "<tr><td>" . htmlspecialchars($order["group"]) . "</td><td>";
    foreach ($order["items"] as $item) {
        echo htmlspecialchars($item) . "; ";
    }
    echo "</td><td>" . count($order["items"]) . "</td></tr>";
}
echo "</table>";
// 1A | kanapka z serem; sok jabłkowy; | 2
// 2B | drożdżówka; drożdżówka; sałatka; | 3
?>

  <h2>Twoja pętla</h2>
<?php
// TU ZMIEŃ: dopisz własną pętlę, na przykład foreach po ulubionych grach.
?>
</body>
</html>

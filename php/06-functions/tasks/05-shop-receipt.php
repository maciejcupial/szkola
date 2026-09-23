<?php
// Task 5 of 5 (for volunteers): a shop receipt from lineTotal(), cartTotal() and shippingCost().
// Expected:
//   Zeszyt A5: 4 x 4,50 zł = 18,00 zł
//   Długopis: 3 x 2,99 zł = 8,97 zł
//   Plecak: 1 x 59,00 zł = 59,00 zł
//   Suma: 85,97 zł
//   Dostawa: 14,99 zł
//   Do zapłaty: 100,96 zł
//   Z kodem „DOSTAWA50” (darmowa dostawa od 50 zł): dostawa 0,00 zł, do zapłaty 85,97 zł
header("Content-Type: text/html; charset=UTF-8");

function formatMoney($amount) {
    return number_format($amount, 2, ",", " ") . " zł";
}

function lineTotal($price, $quantity) {
    // TU ZMIEŃ: zwróć cenę razy liczbę sztuk
    return 0;
}

function cartTotal($cart) {
    // TU ZMIEŃ: akumulator $sum, pętla foreach po $cart, wywołanie lineTotal(), return $sum
    return 0;
}

// Free shipping when $total >= $freeFrom, otherwise 14.99.
function shippingCost($total, $freeFrom = 100) {
    // TU ZMIEŃ: if, który zwraca 0 albo 14.99
    return 0;
}

$cart = [
    ["name" => "Zeszyt A5", "price" => 4.5, "quantity" => 4],
    ["name" => "Długopis", "price" => 2.99, "quantity" => 3],
    ["name" => "Plecak", "price" => 59, "quantity" => 1],
];

$total = cartTotal($cart);
$shipping = shippingCost($total);
$promoShipping = shippingCost($total, 50);

$lines = [];
foreach ($cart as $item) {
    $lines[] = [
        "name" => $item["name"],
        "quantity" => $item["quantity"],
        "price" => formatMoney($item["price"]),
        "lineTotal" => formatMoney(lineTotal($item["price"], $item["quantity"])),
    ];
}
$totalText = formatMoney($total);
$shippingText = formatMoney($shipping);
$toPayText = formatMoney($total + $shipping);
$promoShippingText = formatMoney($promoShipping);
$promoToPayText = formatMoney($total + $promoShipping);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: paragon ze sklepu</title>
</head>
<body>
  <h1>Zadanie 5 z 5 (dla chętnych): paragon ze sklepu</h1>
  <p>
    Dokończ trzy funkcje: <code>lineTotal</code>, <code>cartTotal</code> i <code>shippingCost</code>.
    Funkcja <code>cartTotal</code> ma korzystać z <code>lineTotal</code>, a nie liczyć wszystkiego od nowa.
  </p>
  <?php foreach ($lines as $line): ?>
    <p>
      <?= htmlspecialchars($line["name"]) ?>: <?= $line["quantity"] ?> x
      <?= htmlspecialchars($line["price"]) ?> = <?= htmlspecialchars($line["lineTotal"]) ?>
    </p>
  <?php endforeach; ?>
  <p>Suma: <?= htmlspecialchars($totalText) ?></p>
  <p>Dostawa: <?= htmlspecialchars($shippingText) ?></p>
  <p><strong>Do zapłaty: <?= htmlspecialchars($toPayText) ?></strong></p>
  <p>
    Z kodem „DOSTAWA50” (darmowa dostawa od 50 zł): dostawa <?= htmlspecialchars($promoShippingText) ?>,
    do zapłaty <?= htmlspecialchars($promoToPayText) ?>
  </p>
</body>
</html>

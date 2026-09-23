<?php
// Task 2 of 6: write lineTotal() and cartTotal() in 02-cart-functions.php.
// Expected:
//   Koszyk (then the Polish task line)
//   Kubek: 2 x 19,90 zł = 39,80 zł
//   Długopis: 5 x 4,20 zł = 21,00 zł
//   Zeszyt: 3 x 6,50 zł = 19,50 zł
//   Do zapłaty: 80,30 zł
header("Content-Type: text/html; charset=UTF-8");

require_once "02-cart-functions.php";

// Skipped, already loaded.
require_once "02-cart-functions.php";

$cart = [
    ["name" => "Kubek", "price" => 19.9, "quantity" => 2],
    ["name" => "Długopis", "price" => 4.2, "quantity" => 5],
    ["name" => "Zeszyt", "price" => 6.5, "quantity" => 3],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: koszyk</title>
</head>
<body>
  <h1>Koszyk</h1>
  <p>Zadanie 2: dopisz funkcje <code>lineTotal()</code> i <code>cartTotal()</code>
    w pliku <code>02-cart-functions.php</code>.</p>
  <ul>
    <?php foreach ($cart as $item): ?>
      <li>
        <?= htmlspecialchars($item["name"]) ?>:
        <?= htmlspecialchars($item["quantity"]) ?> x <?= htmlspecialchars(formatPrice($item["price"])) ?>
        = <?= htmlspecialchars(formatPrice(lineTotal($item["price"], $item["quantity"]))) ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <p>Do zapłaty: <strong><?= htmlspecialchars(formatPrice(cartTotal($cart))) ?></strong></p>
</body>
</html>

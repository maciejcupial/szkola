<?php
// Task 2 of 5: price filter sent by GET.
// Expected for maxPrice = 10:
//   Chleb: 6,50 zł
//   Masło: 8,99 zł
//   Mleko: 3,80 zł
//   Znaleziono produktów: 3
// Expected for an empty field: Wpisz cenę maksymalną.

$products = [
    "Chleb" => 6.5,
    "Masło" => 8.99,
    "Ser żółty" => 24.0,
    "Mleko" => 3.8,
    "Kawa" => 32.5,
];

$maxPriceText = trim($_GET["maxPrice"] ?? "");
$message = "";
$found = [];

if (isset($_GET["maxPrice"])) {
    // TU ZMIEŃ: pusty $maxPriceText: $message = „Wpisz cenę maksymalną.”
    // Inaczej $maxPrice = (float) $maxPriceText; i foreach po $products:
    // gdy cena <= $maxPrice, to $found[$name] = $price;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: filtr cen</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    .error {
      color: #b91c1c;
    }
  </style>
</head>
<body>
  <h1>Zadanie 2: filtr cen</h1>
  <p>Pokaż produkty, które kosztują najwyżej tyle, ile wpisano. Po wysłaniu spójrz na pasek adresu.</p>

  <form action="02-price-filter.php" method="get">
    <label for="max-price">Cena maksymalna (zł)</label>
    <input id="max-price" name="maxPrice" type="text" value="<?= htmlspecialchars($maxPriceText) ?>">
    <button type="submit">Szukaj</button>
  </form>

  <?php if ($message !== ""): ?>
    <p class="error"><?= htmlspecialchars($message) ?></p>
  <?php elseif (isset($_GET["maxPrice"])): ?>
    <ul>
      <?php foreach ($found as $name => $price): ?>
        <li><?= htmlspecialchars($name) ?>: <?= number_format($price, 2, ",", " ") ?> zł</li>
      <?php endforeach; ?>
    </ul>
    <p>Znaleziono produktów: <?= count($found) ?></p>
  <?php endif; ?>
</body>
</html>

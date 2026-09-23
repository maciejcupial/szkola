<?php
// Task 4 of 5: VAT rate with match, price label with ?:.
// Expected: Chleb żytni: netto 20 zł, VAT 5%, brutto 21 zł (promocja).
// Also: "medicine" (VAT 8%, brutto 21.6 zł), "toy" (VAT 23%, brutto 24.6 zł),
// "onSale" => false (cena regularna).
header("Content-Type: text/html; charset=UTF-8");

$product = [
    "name" => "Chleb żytni",
    "category" => "food",
    "netPrice" => 20,
    "onSale" => true,
];

// TU ZMIEŃ: zamiast 0 wstaw match ($product["category"]) z gałęzią default
$vatRate = 0;

$grossPrice = $product["netPrice"] + $product["netPrice"] * $vatRate / 100;

// TU ZMIEŃ: zamiast stałego tekstu operator ? : zależny od $product["onSale"]
$priceLabel = "cena regularna";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: stawka VAT</title>
</head>
<body>
  <h1>Zadanie 4: stawka VAT</h1>
  <p>Ustaw stawkę VAT instrukcją <code>match</code>: żywność i książki 5%, leki 8%, reszta 23%.
    Opis ceny wybierz operatorem <code>? :</code>: „promocja” albo „cena regularna”.</p>
  <p><?= htmlspecialchars($product["name"]) ?>: netto <?= $product["netPrice"] ?> zł,
    VAT <?= $vatRate ?>%, brutto <?= $grossPrice ?> zł (<?= htmlspecialchars($priceLabel) ?>).</p>
</body>
</html>

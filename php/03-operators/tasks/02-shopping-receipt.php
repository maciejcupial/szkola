<?php
// Task 2 of 5: a shopping receipt with +=, -=, ++ and .= in a foreach loop.
// Expected:
//   Paragon: chleb masło mleko jajka
//   Produktów: 4
//   Suma: 31 zł
//   Po kuponie: 26 zł
header("Content-Type: text/html; charset=UTF-8");

$cart = [
    "chleb" => 6,
    "masło" => 9,
    "mleko" => 4,
    "jajka" => 12,
];
$coupon = 5;

// Set before the loop, or they reset on every pass.
$receipt = "Paragon:";
$productCount = 0;
$sum = 0;

foreach ($cart as $product => $price) {
    // TU ZMIEŃ: dopisz do $receipt spację i nazwę produktu (.=)
    // TU ZMIEŃ: zwiększ $productCount o jeden (++)
    // TU ZMIEŃ: dodaj cenę do $sum (+=)
}

// TU ZMIEŃ: zamiast samego $sum odejmij kupon; możesz użyć -= na kopii sumy
$afterCoupon = $sum;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: paragon</title>
</head>
<body>
  <h1>Zadanie 2: paragon</h1>
  <p>
    W pętli foreach doklej każdy produkt do paragonu, policz produkty licznikiem ++ i zsumuj ceny
    przez +=. Na koniec odejmij kupon za 5 zł.
  </p>

  <p><?= htmlspecialchars($receipt) ?></p>
  <p>Produktów: <?= htmlspecialchars($productCount) ?></p>
  <p>Suma: <?= htmlspecialchars($sum) ?> zł</p>
  <p>Po kuponie: <?= htmlspecialchars($afterCoupon) ?> zł</p>
</body>
</html>

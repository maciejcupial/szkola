<?php
// Task 4 of 6: UPDATE one price (prepared statement), id and price from the address.
// Expected (fresh setup.sql):
//   04-change-price.php                    Dopisz do adresu ?id=2&price=4.20
//   04-change-price.php?id=2&price=4.20    Zmienionych wierszy: 1   (the list shows Długopis - 4.20 zł)
//   the same address again                 Zmienionych wierszy: 0
//   04-change-price.php?id=99&price=1      Zmienionych wierszy: 0

header("Content-Type: text/html; charset=UTF-8");

require __DIR__ . "/../db.php";

$id = $_GET["id"] ?? "";
$price = $_GET["price"] ?? "";

if (empty($id) || empty($price)) {
    $message = "Dopisz do adresu ?id=2&price=4.20";
} else {
    $message = "Zmienionych wierszy: 0";
    // TU ZMIEŃ: UPDATE przygotowany z WHERE id = ?, typy "di" (cena, potem numer).
    // Do $message: „Zmienionych wierszy: ” + mysqli_affected_rows($db) albo „Błąd zapytania: ”.
}

$products = [];
$result = mysqli_query($db, "SELECT name, price FROM products");
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: zmiana ceny</title>
</head>
<body>
  <h1>Zmiana ceny</h1>
  <p>Zadanie: zmień cenę produktu o numerze z adresu strony i pokaż, ile wierszy się zmieniło.</p>
  <p><?= htmlspecialchars($message) ?></p>
  <ul>
    <?php foreach ($products as $product): ?>
      <li><?= htmlspecialchars($product["name"]) ?> - <?= htmlspecialchars($product["price"]) ?> zł</li>
    <?php endforeach; ?>
  </ul>
</body>
</html>

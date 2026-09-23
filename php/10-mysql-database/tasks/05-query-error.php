<?php
// Task 5 of 6: loadProducts() returns the error text or the rows; the page shows "Błąd zapytania: ..."
// in a <p> or a <ul> of "name - price zł".
// Expected (fresh setup.sql; the error wording can differ between MySQL versions):
//   Zapytanie 1 (literówka w nazwie kolumny)
//     Błąd zapytania: Unknown column 'nazwa' in 'field list'
//   Zapytanie 2 (literówka w nazwie tabeli)
//     Błąd zapytania: Table 'shop_tasks.product' doesn't exist
//   Zapytanie 3 (poprawne)
//     Kubek - 19.90 zł, Długopis - 3.50 zł, Zeszyt - 7.20 zł, Plecak - 89.00 zł, Linijka - 2.40 zł

header("Content-Type: text/html; charset=UTF-8");

require __DIR__ . "/../db.php";

// A function does not see the outside $db, so it comes as a parameter.
function loadProducts($db, $query) {
    $error = "";
    $rows = [];
    // TU ZMIEŃ: $result = mysqli_query($db, $query); if (!$result): opis błędu do $error,
    // inaczej pętla while z mysqli_fetch_assoc(), każdy wiersz na koniec $rows.
    return ["error" => $error, "rows" => $rows];
}

$queries = [
    "Zapytanie 1 (literówka w nazwie kolumny)" => "SELECT nazwa, price FROM products",
    "Zapytanie 2 (literówka w nazwie tabeli)" => "SELECT name, price FROM product",
    "Zapytanie 3 (poprawne)" => "SELECT name, price FROM products",
];
$results = [];
foreach ($queries as $title => $query) {
    $results[$title] = loadProducts($db, $query);
}
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: gdy zapytanie się nie uda</title>
</head>
<body>
  <h1>Gdy zapytanie się nie uda</h1>
  <p>Zadanie: dokończ funkcję loadProducts(), żeby przy błędnym zapytaniu zwracała komunikat
    z bazy, a przy poprawnym listę produktów.</p>
  <?php foreach ($results as $title => $result): ?>
    <h2><?= htmlspecialchars($title) ?></h2>
    <?php if ($result["error"] !== ""): ?>
      <p>Błąd zapytania: <?= htmlspecialchars($result["error"]) ?></p>
    <?php else: ?>
      <ul>
        <?php foreach ($result["rows"] as $row): ?>
          <li><?= htmlspecialchars($row["name"]) ?> - <?= htmlspecialchars($row["price"]) ?> zł</li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  <?php endforeach; ?>
</body>
</html>

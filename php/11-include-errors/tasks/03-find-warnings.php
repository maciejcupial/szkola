<?php
// Task 3 of 6: find and fix three bugs. Warns on purpose; as delivered:
//   Warning: include(03-manu.php): Failed to open stream: No such file or directory in ... on line ...
//   Warning: include(): Failed opening '03-manu.php' for inclusion (include_path=...) in ... on line ...
//   Warning: Undefined variable $total in ... on line ...
//   Warning: Undefined array key "price" in ... on line ...
// Expected after the fixes (no Warning):
//   Sklep
//   Produkty | Kontakt
//   Kubek - 19.99 zł
//   Długopis - 4.49 zł
//   Zeszyt - 6.49 zł
//   Razem: 30.97 zł
// At the end of the file note each fix: line, message type, the fix.
header("Content-Type: text/html; charset=UTF-8");

$products = [
    ["name" => "Kubek", "price" => 19.99],
    ["name" => "Długopis", "prcie" => 4.49],
    ["name" => "Zeszyt", "price" => 6.49],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: znajdź błędy</title>
</head>
<body>
  <h1>Sklep</h1>
  <?php
  // TU ZMIEŃ: popraw błędy, na które wskazują komunikaty Warning
  include "03-manu.php";
  ?>
  <ul>
    <?php
    foreach ($products as $product) {
        $price = $product["price"];
        $total = $total + $price;
        echo "<li>" . htmlspecialchars($product["name"] . " - " . $price . " zł") . "</li>";
    }
    ?>
  </ul>
  <p>Razem: <?= htmlspecialchars($total . " zł") ?></p>
</body>
</html>

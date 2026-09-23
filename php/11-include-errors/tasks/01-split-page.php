<?php
// Task 1 of 6: split this page into three files with include.
// Expected (the same before and after the split):
//   Sklep
//   Nasze produkty
//   Kubek - 19.9 zł
//   Długopis - 4.2 zł
//   Zeszyt - 6.5 zł
//   Kontakt: sklep@example.com
header("Content-Type: text/html; charset=UTF-8");

$products = [
    ["name" => "Kubek", "price" => 19.9],
    ["name" => "Długopis", "price" => 4.2],
    ["name" => "Zeszyt", "price" => 6.5],
];

// TU ZMIEŃ: tu include "01-header.php"; kod od <!DOCTYPE html> do </header> do 01-header.php
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sklep</title>
</head>
<body>
  <header>
    <h1>Sklep</h1>
  </header>

  <h2>Nasze produkty</h2>
  <ul>
    <?php foreach ($products as $product): ?>
      <li><?= htmlspecialchars($product["name"] . " - " . $product["price"] . " zł") ?></li>
    <?php endforeach; ?>
  </ul>

  <?php
  // TU ZMIEŃ: tu include "01-footer.php"; kod od <footer> do </html> do 01-footer.php
  ?>
  <footer>
    <p>Kontakt: sklep@example.com</p>
  </footer>
</body>
</html>

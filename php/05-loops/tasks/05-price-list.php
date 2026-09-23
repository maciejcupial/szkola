<?php
// Task 5 of 6: price list table with foreach over an associative array.
// Expected: rows chleb | 6.5 zł, mleko | 4.2 zł, ser | 12.9 zł (pink), kawa | 24.99 zł (pink),
// jabłka | 5.8 zł, and under the table "Razem: 54.39 zł".
header("Content-Type: text/html; charset=UTF-8");

$prices = [
    "chleb" => 6.5,
    "mleko" => 4.2,
    "ser" => 12.9,
    "kawa" => 24.99,
    "jabłka" => 5.8,
];
$total = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: cennik</title>
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
  <h1>Zadanie 5: cennik sklepu</h1>
  <p>Zbuduj pętlą <code>foreach</code> wiersze tabeli: nazwa produktu i cena. Produkty droższe niż
    10 zł dostają klasę <code>expensive</code> (różowe tło). Pod tabelą pokaż sumę
    wszystkich cen.</p>
  <table>
    <tr><th>Produkt</th><th>Cena</th></tr>
<?php
// $rowClass = $price > 10 ? ' class="expensive"' : ''; goes inside <tr ...>.

// TU ZMIEŃ: pętla foreach, która wypisuje wiersz <tr> dla każdego produktu i dodaje cenę do $total
?>
  </table>
  <p>Razem: <?= round($total, 2) ?> zł</p>
</body>
</html>

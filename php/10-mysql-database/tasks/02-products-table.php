<?php
// Task 2 of 6: all products in a table, count in $count, price sum in $total, class "expensive" > 50 zł.
// Expected (fresh setup.sql): Kubek 19.90 zł, Długopis 3.50 zł, Zeszyt 7.20 zł, Plecak 89.00 zł,
//   Linijka 2.40 zł (only Plecak pink); Liczba produktów: 5; Wartość wszystkich produktów: 122.00 zł

header("Content-Type: text/html; charset=UTF-8");

require __DIR__ . "/../db.php";

// TU ZMIEŃ: zapytanie SELECT o nazwę i cenę wszystkich produktów, wynik do $result.

$count = 0;
$total = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: tabela produktów</title>
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
  <h1>Wszystkie produkty</h1>
  <p>Zadanie: pokaż wszystkie produkty w tabeli, policz je i zsumuj ceny. Produkty droższe niż
    50 zł mają różowe tło.</p>
  <table>
    <tr>
      <th>Nazwa</th>
      <th>Cena</th>
    </tr>
    <?php
    // TU ZMIEŃ: pętla while: $count++, cena do $total, <tr> z dwiema <td>, class="expensive" > 50 zł.
    ?>
  </table>
  <p>Liczba produktów: <?= $count ?></p>
  <p>Wartość wszystkich produktów: <?= number_format($total, 2) ?> zł</p>
</body>
</html>
<?php
mysqli_close($db);

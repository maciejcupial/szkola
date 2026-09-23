<?php
// Task 1 of 6: products cheaper than 10 zł, one <li> each: "name - price zł".
// Expected (fresh setup.sql): Długopis - 3.50 zł, Zeszyt - 7.20 zł, Linijka - 2.40 zł

header("Content-Type: text/html; charset=UTF-8");

// __DIR__ is this file's folder, so this finds db.php one folder up.
require __DIR__ . "/../db.php";

$products = [];
// TU ZMIEŃ: zapytanie SELECT z warunkiem WHERE price < 10 do $result,
// potem pętla while z mysqli_fetch_assoc($result), każdy wiersz na koniec $products.

mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: tanie produkty</title>
</head>
<body>
  <h1>Produkty tańsze niż 10 zł</h1>
  <p>Zadanie: pokaż z bazy produkty tańsze niż 10 zł, każdy w osobnym punkcie listy.</p>
  <ul>
    <!-- TU ZMIEŃ: foreach po $products, jeden <li> na produkt. -->
  </ul>
</body>
</html>

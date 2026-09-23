<?php
// Task 5 of 6: showProducts() prints "Błąd zapytania: ..." in a <p> or a <ul> of "name - price zł".
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
function showProducts($db, $query) {
    // TU ZMIEŃ: $result = mysqli_query($db, $query); a potem if (!$result) { ... } else { ... }.
}
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
  <p>Zadanie: dokończ funkcję showProducts(), żeby przy błędnym zapytaniu pokazywała komunikat
    z bazy, a przy poprawnym listę produktów.</p>
  <h2>Zapytanie 1 (literówka w nazwie kolumny)</h2>
  <?php showProducts($db, "SELECT nazwa, price FROM products"); ?>
  <h2>Zapytanie 2 (literówka w nazwie tabeli)</h2>
  <?php showProducts($db, "SELECT name, price FROM product"); ?>
  <h2>Zapytanie 3 (poprawne)</h2>
  <?php showProducts($db, "SELECT name, price FROM products"); ?>
</body>
</html>
<?php
mysqli_close($db);

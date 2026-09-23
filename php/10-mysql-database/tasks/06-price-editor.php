<?php
// Task 6 of 6 (dla chętnych): price editor, <select> of products, UPDATE, table of all products.
// Expected (fresh setup.sql): options "Kubek (19.90 zł)" ... "Linijka (2.40 zł)"
//   Zeszyt + 8.00:  Zmieniono cenę produktu nr 3.   (the table shows Zeszyt 8.00 zł, Zeszyt stays chosen)
//   Zeszyt + 8.00 again:  Nic się nie zmieniło: produkt ma już tę cenę.
//   Zeszyt + 8,50 (comma) or 0 or -5:  Podaj cenę większą od zera, z kropką, na przykład 8.50.

header("Content-Type: text/html; charset=UTF-8");

require __DIR__ . "/../db.php";

$message = "";
$chosenId = "";

if (!empty($_POST)) {
    $chosenId = $_POST["productId"] ?? "";
    // TU ZMIEŃ: cena przez filter_var(..., FILTER_VALIDATE_FLOAT) (liczba albo false), musi być > 0.
    // Potem UPDATE przygotowany; komunikat zależnie od mysqli_affected_rows($db).
}

// A mysqli_result can be walked only once, and the page needs the rows twice.
$products = [];
$result = mysqli_query($db, "SELECT id, name, price FROM products");
// TU ZMIEŃ: pętla while z mysqli_fetch_assoc(); $row["selected"] = "selected", gdy id == $chosenId,
// inaczej ""; każdy wiersz na koniec $products.
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 6: edytor cen</title>
  <style>
    td, th {
      border: 1px solid #999;
      padding: 4px 8px;
    }
  </style>
</head>
<body>
  <h1>Edytor cen</h1>
  <p>Zadanie dla chętnych: wybierz produkt z listy, wpisz nową cenę i zapisz ją w bazie.</p>
  <?php if ($message !== ""): ?>
    <p><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>
  <form method="post">
    <label for="product-id">Produkt</label>
    <select id="product-id" name="productId">
      <!-- TU ZMIEŃ: foreach po $products, <option value="id" selected-albo-nic>nazwa (cena zł)</option>. -->
    </select>
    <label for="product-price">Nowa cena</label>
    <!-- type="text" on purpose: PHP validates the price. -->
    <input id="product-price" name="productPrice" type="text">
    <button type="submit">Zmień cenę</button>
  </form>
  <table>
    <tr>
      <th>Nr</th>
      <th>Nazwa</th>
      <th>Cena</th>
    </tr>
    <!-- TU ZMIEŃ: foreach po $products, jeden wiersz <tr> tabeli na produkt. -->
  </table>
</body>
</html>

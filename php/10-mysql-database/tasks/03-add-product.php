<?php
// Task 3 of 6: a form that INSERTs a product with a prepared statement and shows its new id.
// Expected (fresh setup.sql): empty field: Wpisz nazwę i cenę produktu.
//   Gumka, 1.20: Dodano produkt nr 6: Gumka.   again: Dodano produkt nr 7: Gumka.

header("Content-Type: text/html; charset=UTF-8");

require __DIR__ . "/../db.php";

$message = "";

if (!empty($_POST)) {
    $name = trim($_POST["productName"] ?? "");
    $price = trim($_POST["productPrice"] ?? "");

    // TU ZMIEŃ: puste pole: komunikat; inaczej INSERT zapytaniem przygotowanym (znaki ?).
    // Po udanym zapytaniu: "Dodano produkt nr " . mysqli_insert_id($db) . ": " . $name . "."
    // Po nieudanym: "Błąd zapytania: " . mysqli_error($db)
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: nowy produkt</title>
</head>
<body>
  <h1>Nowy produkt</h1>
  <p>Zadanie: po wysłaniu formularza zapisz produkt w bazie i pokaż numer, który dostał.</p>
  <?php if ($message !== ""): ?>
    <p><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>
  <!-- No action: the form posts back to this file. -->
  <form method="post">
    <label for="product-name">Nazwa</label>
    <input id="product-name" name="productName" type="text" maxlength="100">
    <label for="product-price">Cena</label>
    <!-- step="0.01" allows grosze, like 1.20 -->
    <input id="product-price" name="productPrice" type="number" step="0.01" min="0">
    <button type="submit">Dodaj</button>
  </form>
</body>
</html>
<?php
mysqli_close($db);

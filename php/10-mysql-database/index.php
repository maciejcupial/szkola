<?php
// Worked example: add, list and delete products in the products table.

header("Content-Type: text/html; charset=UTF-8");

require "db.php";

$message = "";

if (!empty($_POST)) {
    // The two forms send different fields; ?? gives "" for a missing one.
    $deleteId = $_POST["deleteId"] ?? "";
    $name = trim($_POST["productName"] ?? "");
    $price = trim($_POST["productPrice"] ?? "");

    if ($deleteId !== "") {
        $stmt = mysqli_prepare($db, "DELETE FROM products WHERE id = ?");
        // One type letter per ?, in order: i = integer.
        mysqli_stmt_bind_param($stmt, "i", $deleteId);
        if (!mysqli_stmt_execute($stmt)) {
            $message = "Błąd zapytania: " . mysqli_error($db);
        } elseif (mysqli_affected_rows($db) === 0) {
            // 0 is not an error: no row matched WHERE.
            $message = "Nie ma już produktu o numerze " . $deleteId . ".";
        } else {
            $message = "Usunięto produkt nr " . $deleteId . ".";
        }
    } elseif (empty($name) || empty($price)) {
        $message = "Wpisz nazwę i cenę produktu.";
    } else {
        // s = string, d = decimal number.
        $stmt = mysqli_prepare($db, "INSERT INTO products (name, price) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "sd", $name, $price);
        if (!mysqli_stmt_execute($stmt)) {
            $message = "Błąd zapytania: " . mysqli_error($db);
        } else {
            $message = "Dodano produkt nr " . mysqli_insert_id($db) . ".";
        }
    }
}

$products = [];
$listError = "";
// No user input here, so plain mysqli_query() is safe.
$result = mysqli_query($db, "SELECT id, name, price FROM products");
if (!$result) {
    $listError = "Błąd zapytania: " . mysqli_error($db);
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
mysqli_close($db);

// Below this block the page only prints ready variables; the tag with = is short for "php echo".
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sklepik: produkty z bazy</title>
  <style>
    :root {
      --background: #ffffff;
      --text: #1f2933;
      --border: #9aa5b1;
    }
    body {
      background: var(--background);
      color: var(--text);
      font-family: system-ui, sans-serif;
    }
    td, th {
      border: 1px solid var(--border);
      padding: 4px 8px;
    }
    .error {
      color: #b91c1c;
    }
  </style>
</head>
<body>
  <h1>Sklepik: produkty z bazy</h1>

  <?php if ($message !== ""): ?>
    <p><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>

  <?php if ($listError !== ""): ?>
    <p class="error"><?= htmlspecialchars($listError) ?></p>
  <?php else: ?>
    <table>
      <tr>
        <th>Nr</th>
        <th>Nazwa</th>
        <th>Cena</th>
        <th>Akcja</th>
      </tr>
      <?php foreach ($products as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row["id"]) ?></td>
          <td><?= htmlspecialchars($row["name"]) ?></td>
          <td><?= htmlspecialchars($row["price"]) ?> zł</td>
          <td>
            <!-- The hidden field tells PHP which row to delete. -->
            <form method="post">
              <input type="hidden" name="deleteId" value="<?= htmlspecialchars($row["id"]) ?>">
              <button type="submit">Usuń</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <h2>Nowy produkt</h2>
  <!-- No action: the form posts back to this file. -->
  <form method="post">
    <label for="product-name">Nazwa</label>
    <input id="product-name" name="productName" type="text" maxlength="100">
    <label for="product-price">Cena</label>
    <!-- step="0.01" allows grosze, like 4.20 -->
    <input id="product-price" name="productPrice" type="number" step="0.01" min="0">
    <button type="submit">Dodaj</button>
  </form>

  <!-- TU ZMIEŃ: własna sekcja, np. produkty tańsze niż 10 zł: zapytanie w bloku PHP u góry, lista tu. -->
</body>
</html>

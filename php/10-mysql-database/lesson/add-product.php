<?php
// Lesson 20 (4Ti 22), slides 3-5 and 8: saving form data with INSERT.
// Expected output: fresh setup.sql, form sent with Ołówek and 1.80.
header("Content-Type: text/html; charset=UTF-8");

// Opened without the form, $_POST["productName"] would print a warning.
if (empty($_POST)) {
    die("Ten plik odbiera formularz. Otwórz add-product.html.");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

$name = $_POST["productName"];
$price = $_POST["productPrice"];

// The apostrophes belong to SQL: they mark text values in the query.
$query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
// INSERT INTO products (name, price) VALUES ('Ołówek', '1.80')
mysqli_query($db, $query);
$newId = mysqli_insert_id($db);   // 4
mysqli_close($db);

// Risky: price  1.80'), ('Włamanie', '0  adds two rows; Kubek 'XL' breaks the query.
?>
<h2>Lekcja 20, slajd 3: od $_POST do zapytania INSERT</h2>
<p><?= htmlspecialchars($query) ?></p>
<p>Dodano produkt: <?= htmlspecialchars($name) ?></p>

<h2>Lekcja 20, slajd 5: numer nowego wiersza</h2>
<p>Nowy wiersz ma id <?= $newId ?></p>

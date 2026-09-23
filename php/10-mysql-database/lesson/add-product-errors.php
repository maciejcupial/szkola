<?php
// Lesson 22 (4Ti 24), slide 7: add-product.php with error handling.
// Expected output: fresh setup.sql, form sent with Ołówek and 1.80.
header("Content-Type: text/html; charset=UTF-8");

if (empty($_POST)) {
    die("Ten plik odbiera formularz. Otwórz add-product.html.");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

echo "<h2>Lekcja 22, ćwiczenie ze slajdu 7: obsługa błędu w add-product.php</h2>";
$name = $_POST["productName"];
$price = $_POST["productPrice"];
$query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
// Błąd zapytania: Unknown column 'nam' in 'field list'
// $query = "INSERT INTO products (nam, price) VALUES ('$name', '$price')";

// Keep the result: calling mysqli_query() again in the if would insert twice.
$result = mysqli_query($db, $query);

if (!$result) {
    echo "Błąd zapytania: " . htmlspecialchars(mysqli_error($db));
} else {
    echo "Dodano produkt nr " . mysqli_insert_id($db);   // Dodano produkt nr 4
}

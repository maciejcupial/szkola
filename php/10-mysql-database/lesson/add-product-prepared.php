<?php
// Lesson 20 (4Ti 22), slide 6: prepared statement, the safe add-product.php.
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

$name = $_POST["productName"];
$price = $_POST["productPrice"];

$stmt = mysqli_prepare($db, "INSERT INTO products (name, price) VALUES (?, ?)");
if (!$stmt) {
    die("Błąd zapytania: " . htmlspecialchars(mysqli_error($db)));
}
// s = string, d = decimal. A non-number price like „abc” silently becomes 0.
mysqli_stmt_bind_param($stmt, "sd", $name, $price);

$result = mysqli_stmt_execute($stmt);
if (!$result) {
    // Name over 100 chars: Błąd zapytania: Data too long for column 'name' at row 1
    $message = "Błąd zapytania: " . mysqli_error($db);
} else {
    $message = "Dodano produkt nr " . mysqli_insert_id($db);   // Dodano produkt nr 4
}
mysqli_close($db);
?>
<h2>Lekcja 20, slajd 6: zapytanie przygotowane</h2>
<p><?= htmlspecialchars($message) ?></p>

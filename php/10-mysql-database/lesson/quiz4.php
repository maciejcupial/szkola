<?php
// Lesson 21 (4Ti 23), slide 7: two exam questions (EE.09 2026-01 q8, E.14 2020-01 q39), on products.
// Changes every price. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Question 1
$zapytanie = "UPDATE products SET price = '1.00' WHERE id < 10";
mysqli_query($db, $zapytanie);
// Answer D
$changed = mysqli_affected_rows($db);   // 3
// Fatal error: Uncaught TypeError: mysqli_num_rows(): Argument #1 ($result) must be of type mysqli_result
// $changed = mysqli_num_rows($db);

// Question 2
mysqli_query($db, "DELETE FROM products WHERE price < 0");
// Answer C
$x = mysqli_affected_rows($db);   // 0
mysqli_close($db);
?>
<h2>1. Jak pobrać liczbę zmienionych wierszy?</h2>
<?= $changed ?><br>

<h2>2. Jaką wartość przyjmie zmienna $x?</h2>
<?= $x ?>

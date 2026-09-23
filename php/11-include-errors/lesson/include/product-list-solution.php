<?php
// Lesson 25, slide 8: model solution of the exercise, the controller.
// Needs the shop database from lesson 21.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

$result = mysqli_query($db, "SELECT * FROM products");
$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
mysqli_close($db);

require "templates/header.php";          // Sklep
require "templates/product-list.php";
// Kubek - 19.90 zł
// Długopis - 3.50 zł
// Zeszyt - 7.20 zł
require "templates/footer.php";          // Kontakt: sklep@example.com

// Step 5: Fatal error: Uncaught Error: Failed opening required 'templates/fotter.php'
// require "templates/fotter.php";

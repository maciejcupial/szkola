<?php
// Lesson 25, slide 8: model solution of the exercise.
// Needs the shop database from lesson 21.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

include "header.php";    // <header><h1>Sklep</h1></header>

$result = mysqli_query($db, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($result)) {
    echo htmlspecialchars($row["name"]) . " - " . htmlspecialchars($row["price"]) . " zł<br>";
}
// Kubek - 19.90 zł
// Długopis - 3.50 zł
// Zeszyt - 7.20 zł

include "footer.php";    // <footer>Kontakt: sklep@example.com</footer>

// Step 5: Fatal error: Uncaught Error: Failed opening required 'fotter.php'
// require "fotter.php";

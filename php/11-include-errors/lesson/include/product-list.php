<?php
// Lesson 25, slide 6: one definition used on many pages.
// Needs the shop database from lesson 21.
header("Content-Type: text/html; charset=UTF-8");

require_once "connect-database.php";
require_once "functions.php";

include "header.php";    // <header><h1>Sklep</h1></header>

// $db comes from connect-database.php.
$result = mysqli_query($db, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($result)) {
    echo htmlspecialchars($row["name"]) . " - " . formatPrice($row["price"]) . "<br>";
}
// Kubek - 19.90 zł
// Długopis - 3.50 zł
// Zeszyt - 7.20 zł

include "footer.php";    // <footer>Kontakt: sklep@example.com</footer>

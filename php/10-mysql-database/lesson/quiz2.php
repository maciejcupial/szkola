<?php
// Lesson 19 (4Ti 21), slide 7: two exam questions (E.14 2020-01 q38, E.14 2018-06 q39), on products.
// Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

echo "<h2>1. Jak wyświetlić wszystkie wyniki zapytania?</h2>";
$tab = mysqli_query($db, "SELECT name FROM products WHERE price < 10");
// Answer C. mysqli_fetch_row(): numeric keys, $row[0] is the first column.
while ($row = mysqli_fetch_row($tab)) {
    echo htmlspecialchars($row[0]) . "<br>";
}
// Długopis
// Zeszyt
// Fatal error: Uncaught Error: Cannot use object of type mysqli_result as array
// echo $tab[0];

echo "<h2>2. Co wpisać w miejsce kropek?</h2>";
$query = mysqli_query($db, "SELECT name, price FROM products");
$count = mysqli_num_rows($query);
for ($i = 0; $i < $count; $i++) {
    // Answer A
    $row = mysqli_fetch_row($query);
    echo htmlspecialchars("$row[0] $row[1]") . "<br>";
}
// Kubek 19.90
// Długopis 3.50
// Zeszyt 7.20

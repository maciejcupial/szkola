<?php
// Lesson 21 (4Ti 23), slides 3-6: UPDATE, DELETE and mysqli_affected_rows().
// Changes the table. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

echo "<h2>Lekcja 21, slajd 3: UPDATE zmienia jeden wiersz</h2>";
mysqli_query($db, "UPDATE products SET price = '4.20' WHERE id = 2");
echo "Zmienionych: " . mysqli_affected_rows($db) . "<br>";   // Zmienionych: 1
$result = mysqli_query($db, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " " . htmlspecialchars($row["name"]) . " " . $row["price"] . "<br>";
}
// 1 Kubek 19.90
// 2 Długopis 4.20
// 3 Zeszyt 7.20

echo "<h2>Lekcja 21, slajd 4: DELETE usuwa cały wiersz</h2>";
mysqli_query($db, "DELETE FROM products WHERE id = 3");
echo "Usuniętych: " . mysqli_affected_rows($db) . "<br>";   // Usuniętych: 1
$result = mysqli_query($db, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " " . htmlspecialchars($row["name"]) . " " . $row["price"] . "<br>";
}
// 1 Kubek 19.90
// 2 Długopis 4.20

echo "<h2>Lekcja 21, slajd 5: WHERE jest obowiązkowe</h2>";
// Do not run: no WHERE hits every row.
// mysqli_query($db, "UPDATE products SET price = '4.20'");
// mysqli_query($db, "DELETE FROM products");
echo "Oba zapytania bez WHERE są zakomentowane.<br>";   // Oba zapytania bez WHERE są zakomentowane.

echo "<h2>Lekcja 21, slajd 6: trzy możliwe wyniki mysqli_affected_rows()</h2>";
// 0 is not an error: row 3 was deleted above.
mysqli_query($db, "UPDATE products SET price = '1.00' WHERE id = 3");
echo "Brak wiersza: " . mysqli_affected_rows($db) . "<br>";   // Brak wiersza: 0
// Also 0: the price is already 4.20.
mysqli_query($db, "UPDATE products SET price = '4.20' WHERE id = 2");
echo "Ta sama cena: " . mysqli_affected_rows($db) . "<br>";   // Ta sama cena: 0
// -1: the query failed (misspelt column).
mysqli_query($db, "UPDATE products SET prise = '1.00' WHERE id = 1");
echo "Błędne zapytanie: " . mysqli_affected_rows($db) . "<br>";   // Błędne zapytanie: -1

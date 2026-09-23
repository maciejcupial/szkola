<?php
// Lesson 21 (4Ti 23), slides 3-6: UPDATE, DELETE and mysqli_affected_rows().
// Changes the table. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Slide 3: UPDATE changes one row.
mysqli_query($db, "UPDATE products SET price = '4.20' WHERE id = 2");
$updated = mysqli_affected_rows($db);   // 1
$result = mysqli_query($db, "SELECT * FROM products");
$afterUpdate = [];
while ($row = mysqli_fetch_assoc($result)) {
    $afterUpdate[] = $row;
}
// 1 Kubek 19.90, 2 Długopis 4.20, 3 Zeszyt 7.20

// Slide 4: DELETE removes the whole row.
mysqli_query($db, "DELETE FROM products WHERE id = 3");
$deleted = mysqli_affected_rows($db);   // 1
$result = mysqli_query($db, "SELECT * FROM products");
$afterDelete = [];
while ($row = mysqli_fetch_assoc($result)) {
    $afterDelete[] = $row;
}
// 1 Kubek 19.90, 2 Długopis 4.20

// Slide 5, do not run: no WHERE hits every row.
// mysqli_query($db, "UPDATE products SET price = '4.20'");
// mysqli_query($db, "DELETE FROM products");

// Slide 6: 0 is not an error, row 3 was deleted above.
mysqli_query($db, "UPDATE products SET price = '1.00' WHERE id = 3");
$missingRow = mysqli_affected_rows($db);   // 0
// Also 0: the price is already 4.20.
mysqli_query($db, "UPDATE products SET price = '4.20' WHERE id = 2");
$samePrice = mysqli_affected_rows($db);   // 0
// -1: the query failed (misspelt column).
mysqli_query($db, "UPDATE products SET prise = '1.00' WHERE id = 1");
$badQuery = mysqli_affected_rows($db);   // -1
mysqli_close($db);
?>
<h2>Lekcja 21, slajd 3: UPDATE zmienia jeden wiersz</h2>
Zmienionych: <?= $updated ?><br>
<?php foreach ($afterUpdate as $row): ?>
  <?= $row["id"] ?> <?= htmlspecialchars($row["name"]) ?> <?= $row["price"] ?><br>
<?php endforeach; ?>

<h2>Lekcja 21, slajd 4: DELETE usuwa cały wiersz</h2>
Usuniętych: <?= $deleted ?><br>
<?php foreach ($afterDelete as $row): ?>
  <?= $row["id"] ?> <?= htmlspecialchars($row["name"]) ?> <?= $row["price"] ?><br>
<?php endforeach; ?>

<h2>Lekcja 21, slajd 5: WHERE jest obowiązkowe</h2>
Oba zapytania bez WHERE są zakomentowane.<br>

<h2>Lekcja 21, slajd 6: trzy możliwe wyniki mysqli_affected_rows()</h2>
Brak wiersza: <?= $missingRow ?><br>
Ta sama cena: <?= $samePrice ?><br>
Błędne zapytanie: <?= $badQuery ?><br>

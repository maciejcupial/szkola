<?php
// Lesson 21 (4Ti 23), slide 8: DELETE with the id from the address.
// Expected output: fresh setup.sql, then ?id=3.
header("Content-Type: text/html; charset=UTF-8");

if (!isset($_GET["id"])) {
    die("Dopisz do adresu na przykład ?id=3");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect(
    "localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia.");
}
$id = $_GET["id"];
$query = "DELETE FROM products
    WHERE id = $id";
mysqli_query($db, $query);
echo "Usuniętych: "
    . mysqli_affected_rows($db);   // Usuniętych: 1
// Second run: Usuniętych: 0 (not an error).

// Risky: ?id=0 OR 1=1 empties the table (Usuniętych: 3).

<?php
// Lesson 21 (4Ti 23), slide 8: UPDATE with id and price from the address.
// Expected output: fresh setup.sql, then ?id=2&price=4.20.
header("Content-Type: text/html; charset=UTF-8");

// isset() with two arguments checks both keys at once.
if (!isset($_GET["id"], $_GET["price"])) {
    die("Dopisz do adresu na przykład ?id=2&price=4.20");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect(
    "localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia.");
}

$id = $_GET["id"];
$price = $_GET["price"];
// id is a number, so no apostrophes around $id.
$query = "UPDATE products
    SET price = '$price'
    WHERE id = $id";
mysqli_query($db, $query);
// Second run: 0 (price already 4.20).
$changed = mysqli_affected_rows($db);   // 1
mysqli_close($db);
// Risky: ?id=0 OR 1=1&price=0.01 changes every row (Zmienionych: 3).
?>
<p>Zmienionych: <?= $changed ?></p>

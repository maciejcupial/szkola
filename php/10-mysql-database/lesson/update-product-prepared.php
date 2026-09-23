<?php
// Lesson 21 (4Ti 23): safe update-product.php with a prepared statement.
// Expected output: fresh setup.sql, then ?id=2&price=4.20.
header("Content-Type: text/html; charset=UTF-8");

if (!isset($_GET["id"], $_GET["price"])) {
    die("Dopisz do adresu na przykład ?id=2&price=4.20");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia.");
}
$id = $_GET["id"];
$price = $_GET["price"];

$stmt = mysqli_prepare($db, "UPDATE products SET price = ? WHERE id = ?");
// Types in the order of the ? marks: d = price, i = id.
mysqli_stmt_bind_param($stmt, "di", $price, $id);
mysqli_stmt_execute($stmt);
$changed = mysqli_affected_rows($db);   // 1
mysqli_close($db);
?>
<p>Zmienionych: <?= $changed ?></p>

<?php
// Lesson 21 (4Ti 23): safe delete-product.php with a prepared statement.
// Expected output: fresh setup.sql, then ?id=3.
header("Content-Type: text/html; charset=UTF-8");

if (!isset($_GET["id"])) {
    die("Dopisz do adresu na przykład ?id=3");
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia.");
}
$id = $_GET["id"];

$stmt = mysqli_prepare($db, "DELETE FROM products WHERE id = ?");
// i = integer: „0 OR 1=1” becomes 0 and deletes nothing.
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$deleted = mysqli_affected_rows($db);   // 1
mysqli_close($db);
?>
<p>Usuniętych: <?= $deleted ?></p>

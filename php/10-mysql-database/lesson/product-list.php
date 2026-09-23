<?php
// Lesson 19 (4Ti 21), slides 4-6 and 8: reading rows with SELECT.
// Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// $result is not rows yet: echo $result would print no product.
$result = mysqli_query($db, "SELECT * FROM products");
$products = [];
// After the last row mysqli_fetch_assoc() gives null and the loop ends.
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
// Kubek - 19.90 zł, Długopis - 3.50 zł, Zeszyt - 7.20 zł

$result = mysqli_query($db, "SELECT name, price FROM products WHERE price < 10");
$cheapProducts = [];
while ($row = mysqli_fetch_assoc($result)) {
    $cheapProducts[] = $row;
}
// Długopis - 3.50 zł, Zeszyt - 7.20 zł
mysqli_close($db);
?>
<h2>Lekcja 19, slajdy 5-6 i ćwiczenie ze slajdu 8: wszystkie produkty</h2>
<ul>
  <?php foreach ($products as $row): ?>
    <li><?= htmlspecialchars($row["name"]) ?> - <?= $row["price"] ?> zł</li>
  <?php endforeach; ?>
</ul>

<h2>Lekcja 19, slajd 4: SELECT jako sito, WHERE price &lt; 10</h2>
<ul>
  <?php foreach ($cheapProducts as $row): ?>
    <li><?= htmlspecialchars($row["name"]) ?> - <?= $row["price"] ?> zł</li>
  <?php endforeach; ?>
</ul>

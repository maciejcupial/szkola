<?php
// Lesson 19 (4Ti 21), slide 7: two exam questions (E.14 2020-01 q38, E.14 2018-06 q39), on products.
// Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Question 1
$tab = mysqli_query($db, "SELECT name FROM products WHERE price < 10");
$names = [];
// Answer C. mysqli_fetch_row(): numeric keys, $row[0] is the first column.
while ($row = mysqli_fetch_row($tab)) {
    $names[] = $row[0];
}
// Długopis, Zeszyt
// Fatal error: Uncaught Error: Cannot use object of type mysqli_result as array
// echo $tab[0];

// Question 2
$query = mysqli_query($db, "SELECT name, price FROM products");
$count = mysqli_num_rows($query);
$rows = [];
for ($i = 0; $i < $count; $i++) {
    // Answer A
    $row = mysqli_fetch_row($query);
    $rows[] = $row;
}
// Kubek 19.90, Długopis 3.50, Zeszyt 7.20
mysqli_close($db);
?>
<h2>1. Jak wyświetlić wszystkie wyniki zapytania?</h2>
<?php foreach ($names as $name): ?>
  <?= htmlspecialchars($name) ?><br>
<?php endforeach; ?>

<h2>2. Co wpisać w miejsce kropek?</h2>
<?php foreach ($rows as $row): ?>
  <?= htmlspecialchars($row[0]) ?> <?= $row[1] ?><br>
<?php endforeach; ?>

<?php
// Lesson 25, slide 2: warm-up questions. Needs the shop database from lesson 21.
// Question 2 adds a row and deletes it right away.
header("Content-Type: text/html; charset=UTF-8");

require_once "connect-database.php";

mysqli_query($db, "SELECT * FROM products");
$errorAfterSuccess = mysqli_error($db);    // "" (empty text)

mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Test', 1.00)");
$newId = mysqli_insert_id($db);    // 4
mysqli_query($db, "DELETE FROM products WHERE id = " . $newId);
$deletedRows = mysqli_affected_rows($db);    // 1

$result = mysqli_query($db, "SELECT * FROM products");
if (!$result) {
    $queryStatus = "Błąd zapytania: " . mysqli_error($db);
} else {
    $queryStatus = "Zapytanie się udało, wierszy: " . mysqli_num_rows($result);    // ... wierszy: 3
}
mysqli_close($db);
?>
<h2>1. Co zwraca mysqli_error($db), gdy zapytanie się udało?</h2>
<p>"<?= htmlspecialchars($errorAfterSuccess) ?>"</p>

<h2>2. Po co mysqli_insert_id($db) po udanym INSERT?</h2>
<p>Nowy wiersz dostał id <?= $newId ?></p>
<p>Usunięty z powrotem: <?= $deletedRows ?> wiersz</p>

<h2>3. Co zrobić z wynikiem mysqli_query(), zanim sprawdzimy if (!$result)?</h2>
<p><?= htmlspecialchars($queryStatus) ?></p>

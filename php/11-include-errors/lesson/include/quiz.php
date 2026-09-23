<?php
// Lesson 25, slide 2: warm-up questions. Needs the shop database from lesson 21.
// Question 2 adds a row and deletes it right away.
header("Content-Type: text/html; charset=UTF-8");

require_once "connect-database.php";

echo "<h2>1. Co zwraca mysqli_error(\$db), gdy zapytanie się udało?</h2>";
mysqli_query($db, "SELECT * FROM products");
var_dump(mysqli_error($db));    // string(0) ""
echo "<br>";

echo "<h2>2. Po co mysqli_insert_id(\$db) po udanym INSERT?</h2>";
mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Test', 1.00)");
$newId = mysqli_insert_id($db);
echo "Nowy wiersz dostał id " . $newId . "<br>";    // Nowy wiersz dostał id 4
mysqli_query($db, "DELETE FROM products WHERE id = " . $newId);
echo "Usunięty z powrotem: " . mysqli_affected_rows($db) . " wiersz<br>";    // Usunięty z powrotem: 1 wiersz

echo "<h2>3. Co zrobić z wynikiem mysqli_query(), zanim sprawdzimy if (!\$result)?</h2>";
$result = mysqli_query($db, "SELECT * FROM products");
if (!$result) {
    echo "Błąd zapytania: " . htmlspecialchars(mysqli_error($db));
} else {
    echo "Zapytanie się udało, wierszy: " . mysqli_num_rows($result);    // Zapytanie się udało, wierszy: 3
}

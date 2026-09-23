<?php
// Lesson 22 (4Ti 24), slides 4-5: mysqli_error() and mysqli_insert_id().
// Adds one row. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

// Without it PHP 8.1+ stops at the first failed query and if (!$result) never runs.
mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

echo "<h2>Lekcja 22, slajd 4: mysqli_error() mówi, co poszło nie tak</h2>";
$query = "SET a=1";
$result = mysqli_query($db, $query);
if (!$result) {
    echo htmlspecialchars(mysqli_error($db)) . "<br>";   // Unknown system variable 'a'
}
$result = mysqli_query($db, "SELECT nam FROM products");
if (!$result) {
    echo htmlspecialchars(mysqli_error($db)) . "<br>";   // Unknown column 'nam' in 'field list'
}
// A success clears the previous error.
$result = mysqli_query($db, "SELECT name FROM products");
var_dump(mysqli_error($db));   // string(0) ""
echo "<br>";

echo "<h2>Lekcja 22, slajd 5: mysqli_insert_id() tylko po udanym zapytaniu</h2>";
$result = mysqli_query($db, "INSERT INTO products (nam, price) VALUES ('Gumka', '2.50')");
if (!$result) {
    echo "Błąd zapytania: " . htmlspecialchars(mysqli_error($db)) . "<br>";
    // Błąd zapytania: Unknown column 'nam' in 'field list'
    echo "mysqli_insert_id(): " . mysqli_insert_id($db) . "<br>";   // mysqli_insert_id(): 0
}
$result = mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Gumka', '2.50')");
if ($result) {
    // The slide shows 5 because its table went through more lessons.
    echo "Dodano produkt nr " . mysqli_insert_id($db);   // Dodano produkt nr 4
}

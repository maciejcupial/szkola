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

// Slide 4
$errors = [];
$query = "SET a=1";
$result = mysqli_query($db, $query);
if (!$result) {
    $errors[] = mysqli_error($db);   // Unknown system variable 'a'
}
$result = mysqli_query($db, "SELECT nam FROM products");
if (!$result) {
    $errors[] = mysqli_error($db);   // Unknown column 'nam' in 'field list'
}
// A success clears the previous error.
$result = mysqli_query($db, "SELECT name FROM products");
$errorAfterSuccess = mysqli_error($db);   // printed like var_dump(): string(0) ""

// Slide 5
$insertError = "";
$idAfterError = 0;
$newId = 0;
$result = mysqli_query($db, "INSERT INTO products (nam, price) VALUES ('Gumka', '2.50')");
if (!$result) {
    $insertError = mysqli_error($db);   // Unknown column 'nam' in 'field list'
    $idAfterError = mysqli_insert_id($db);   // 0
}
$result = mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Gumka', '2.50')");
if ($result) {
    // The slide shows 5 because its table went through more lessons.
    $newId = mysqli_insert_id($db);   // 4
}
mysqli_close($db);
?>
<h2>Lekcja 22, slajd 4: mysqli_error() mówi, co poszło nie tak</h2>
<?php foreach ($errors as $error): ?>
  <?= htmlspecialchars($error) ?><br>
<?php endforeach; ?>
string(<?= strlen($errorAfterSuccess) ?>) "<?= htmlspecialchars($errorAfterSuccess) ?>"<br>

<h2>Lekcja 22, slajd 5: mysqli_insert_id() tylko po udanym zapytaniu</h2>
<?php if ($insertError !== ""): ?>
  Błąd zapytania: <?= htmlspecialchars($insertError) ?><br>
  mysqli_insert_id(): <?= $idAfterError ?><br>
<?php endif; ?>
<?php if ($newId !== 0): ?>
  Dodano produkt nr <?= $newId ?>
<?php endif; ?>

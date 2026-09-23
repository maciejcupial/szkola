<?php
// Lesson 22 (4Ti 24), slide 6: two exam questions (EE.09 2023-01 q10, EE.09 2021-06 q25).
// Adds one row. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Question 1
mysqli_query($db, "SET a=1");
// Answer A
$error = mysqli_error($db);   // Unknown system variable 'a'
// mysqli_errno() gives the error number, not the message.
$errorNumber = mysqli_errno($db);   // 1193

// Question 2
mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Ołówek', '1.80')");
// Answer A
$newId = mysqli_insert_id($db);   // 4
mysqli_close($db);
?>
<h2>1. Która funkcja daje ostatni komunikat o błędzie?</h2>
<?= htmlspecialchars($error) ?><br>
<?= $errorNumber ?><br>

<h2>2. Do czego służy insert_id?</h2>
<?= $newId ?>

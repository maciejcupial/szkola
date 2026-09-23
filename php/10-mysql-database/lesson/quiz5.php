<?php
// Lesson 22 (4Ti 24), slide 6: two exam questions (EE.09 2023-01 q10, EE.09 2021-06 q25).
// Adds one row. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

echo "<h2>1. Która funkcja daje ostatni komunikat o błędzie?</h2>";
mysqli_query($db, "SET a=1");
// Answer A
echo htmlspecialchars(mysqli_error($db)) . "<br>";   // Unknown system variable 'a'
// mysqli_errno() gives the error number, not the message.
echo mysqli_errno($db) . "<br>";                     // 1193

echo "<h2>2. Do czego służy insert_id?</h2>";
mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Ołówek', '1.80')");
// Answer A
echo mysqli_insert_id($db);   // 4

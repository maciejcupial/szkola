<?php
// Lesson 20 (4Ti 22), slide 7: two exam questions (EE.09 2020-01 q25, E.14 2020-01 q25), on products.
// Adds two rows. Expected output assumes a fresh setup.sql.
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Question 1
$a = "Ołówek";
$b = "1.80";
// Answer D: NULL in place of the auto-increment key.
$query = "INSERT INTO products VALUES (NULL, '$a', '$b')";
mysqli_query($db, $query);
$firstId = mysqli_insert_id($db);   // 4

// Question 2, answer D
mysqli_query($db, "INSERT INTO products (name, price) VALUES ('Gumka', '2.50')");
$secondId = mysqli_insert_id($db);   // 5
mysqli_close($db);
?>
<h2>1. Które polecenie przypisać do $query?</h2>
Nowy wiersz ma id <?= $firstId ?>

<h2>2. Co się stanie po pominięciu pola klucza?</h2>
Nowy wiersz ma id <?= $secondId ?>

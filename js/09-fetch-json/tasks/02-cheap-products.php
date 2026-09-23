<?php
// Task 2 of 5: a JSON API with only the products cheaper than 10 zł.
// Expected (fresh setup.sql), opened in the browser:
//   [{"id":"2","name":"Długopis","price":"3.50"},{"id":"3","name":"Zeszyt","price":"7.20"}]

require __DIR__ . "/../db.php";

$products = [];
// TU ZMIEŃ: wyślij zapytanie SELECT id, name, price FROM products z warunkiem WHERE price < 10
// TU ZMIEŃ: pętla while z mysqli_fetch_assoc(), każdy wiersz dopisz do $products ($products[] = $row;)
mysqli_close($db);

header("Content-Type: application/json");
echo json_encode($products, JSON_UNESCAPED_UNICODE);

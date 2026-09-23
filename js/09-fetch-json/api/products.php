<?php
// JSON API: every product from the shop database. Open it in the browser to see the raw JSON.
// Expected (fresh setup.sql): [{"id":"1","name":"Kubek","price":"19.90"},{"id":"2",...},{"id":"3",...}]

require __DIR__ . "/../db.php";

$result = mysqli_query($db, "SELECT id, name, price FROM products");
$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
mysqli_close($db);

header("Content-Type: application/json");
// Without the flag "Długopis" comes out as "Długopis": valid JSON, but hard to read.
echo json_encode($products, JSON_UNESCAPED_UNICODE);

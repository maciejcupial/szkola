<?php
// Lesson 31 (4Ti 90), slide 5: PHP answers with JSON instead of HTML.
// Expected (fresh setup.sql): [{"id":"1","name":"Kubek","price":"19.90"},{"id":"2",...},{"id":"3",...}]
$db = mysqli_connect("localhost", "root", "", "shop");

$result = mysqli_query($db, "SELECT id, name, price FROM products");
$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
mysqli_close($db);

header("Content-Type: application/json");
echo json_encode($products, JSON_UNESCAPED_UNICODE);

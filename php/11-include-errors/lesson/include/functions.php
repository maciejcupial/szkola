<?php
// Lesson 25, slides 5-6: model, shared functions, prints nothing.

// 19.9 -> "19.90 zł"
function formatPrice($p) {
    return number_format($p, 2) . " zł";
}

function getProducts($db) {
    $result = mysqli_query($db, "SELECT * FROM products");
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;
}

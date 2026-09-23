<?php
// Shared shop functions: only definitions, prints nothing.

// number_format(1234.5, 2, ",", " ") gives "1 234,50".
function formatPrice($price) {
    return number_format($price, 2, ",", " ") . " zł";
}

function sumPrices($products) {
    $total = 0;
    foreach ($products as $product) {
        $total = $total + $product["price"];
    }
    return $total;
}

// $b = 0 throws DivisionByZeroError.
function divide($a, $b) {
    return $a / $b;
}

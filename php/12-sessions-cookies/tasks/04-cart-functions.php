<?php
// Task 4 of 6, model: prices and the cart total for 04-cart.php.

function formatPrice(float $price): string
{
    return number_format($price, 2, ",", " ");   // 4.5 -> 4,50
}

// One row per product in the cart, ready for the view.
function cartLines(array $cart, array $products): array
{
    $lines = [];
    foreach ($cart as $productId => $quantity) {
        $lines[] = [
            "name" => $products[$productId]["name"],
            "quantity" => $quantity,
            "value" => formatPrice($products[$productId]["price"] * $quantity),
        ];
    }
    return $lines;
}

function cartTotal(array $cart, array $products): float
{
    $total = 0;
    // TU ZMIEŃ: foreach po $cart ($productId => $quantity), dodaj do $total cenę razy $quantity
    return $total;
}

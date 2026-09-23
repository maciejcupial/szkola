<?php
// Task 2 of 6: controller; write lineTotal() and cartTotal() in 02-cart-functions.php (the model).
// Expected:
//   Koszyk (then the Polish task line)
//   Kubek: 2 x 19,90 zł = 39,80 zł
//   Długopis: 5 x 4,20 zł = 21,00 zł
//   Zeszyt: 3 x 6,50 zł = 19,50 zł
//   Do zapłaty: 80,30 zł
header("Content-Type: text/html; charset=UTF-8");

require_once "02-cart-functions.php";

// Skipped, already loaded.
require_once "02-cart-functions.php";

$cart = [
    ["name" => "Kubek", "price" => 19.9, "quantity" => 2],
    ["name" => "Długopis", "price" => 4.2, "quantity" => 5],
    ["name" => "Zeszyt", "price" => 6.5, "quantity" => 3],
];

$cartLines = [];
foreach ($cart as $item) {
    $lineTotal = lineTotal($item["price"], $item["quantity"]);
    $cartLines[] = $item["name"] . ": " . $item["quantity"] . " x " . formatPrice($item["price"])
        . " = " . formatPrice($lineTotal);
}
$total = formatPrice(cartTotal($cart));

require "templates/02-cart.php";

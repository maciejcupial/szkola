<?php
// Task 4 of 6: a cart in $_SESSION["cart"] (product id => pieces) and its total.
// Split as in index.php: this controller, 04-cart-functions.php (model), templates/04-cart.php (view).
// Expected:
//   at the start:  Koszyk jest pusty.  Razem: 0,00 zł
//   after „Dodaj” at Chleb twice and at Mleko once:
//     Chleb: 2 szt., 9,00 zł
//     Mleko: 1 szt., 3,20 zł
//     Razem: 12,20 zł
//   after „Wyczyść koszyk”:  Koszyk jest pusty.  Razem: 0,00 zł

require_once "04-cart-functions.php";

session_start();

$products = [
    "bread" => ["name" => "Chleb", "price" => 4.50],
    "milk" => ["name" => "Mleko", "price" => 3.20],
    "apples" => ["name" => "Jabłka 1 kg", "price" => 5.99],
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// TU ZMIEŃ: pole add z id z $products: zwiększ $_SESSION["cart"][id] o 1 (brak w koszyku: od 0)

// TU ZMIEŃ: gdy przyszło pole clear, zapisz w $_SESSION["cart"] pustą tablicę

$cart = $_SESSION["cart"];

$productPrices = [];
foreach ($products as $productId => $product) {
    $productPrices[$productId] = formatPrice($product["price"]);
}
$cartLines = cartLines($cart, $products);
$totalText = formatPrice(cartTotal($cart, $products));

require "templates/04-cart.php";

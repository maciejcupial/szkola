<?php
// Controller: takes data from functions.php (model) and shows it with templates/ (views).
// Frameworks split a page the same way: controller, model, view.
header("Content-Type: text/html; charset=UTF-8");

require_once "functions.php";

// Skipped, already loaded. Plain require: Fatal error: Cannot redeclare.
require_once "functions.php";

// TU ZMIEŃ: własny tytuł strony i własne produkty
$pageTitle = "Sklep";
$products = [
    ["name" => "Kubek", "price" => 19.90],
    ["name" => "Długopis", "price" => 4.20],
    ["name" => "Zeszyt", "price" => 6.50],
];

$productLines = [];
foreach ($products as $product) {
    $productLines[] = $product["name"] . ": " . formatPrice($product["price"]);
}
$total = formatPrice(sumPrices($products));

$divisionError = null;
try {
    $divisionResult = divide(10, 0);
} catch (DivisionByZeroError $e) {
    $divisionError = $e->getMessage();
}

// Warning: Undefined variable $missingVariable
// $message = $missingVariable;

// The views see every variable set above.
require "templates/header.php";
require "templates/shop.php";
require "templates/footer.php";

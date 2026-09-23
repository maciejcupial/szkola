<?php
// Task 3 of 6: find and fix three bugs. Warns on purpose; as delivered:
//   Warning: Undefined variable $total in ... on line ...
//   Warning: Undefined array key "price" in ... on line ...
//   Warning: include(templates/03-manu.php): Failed to open stream: No such file or directory in ...
//   Warning: include(): Failed opening 'templates/03-manu.php' for inclusion (include_path=...) in ...
// Expected after the fixes (no Warning):
//   Sklep
//   Produkty | Kontakt
//   Kubek - 19.99 zł
//   Długopis - 4.49 zł
//   Zeszyt - 6.49 zł
//   Razem: 30.97 zł
// At the end of the file note each fix: line, message type, the fix.
header("Content-Type: text/html; charset=UTF-8");

$products = [
    ["name" => "Kubek", "price" => 19.99],
    ["name" => "Długopis", "prcie" => 4.49],
    ["name" => "Zeszyt", "price" => 6.49],
];

// TU ZMIEŃ: popraw błędy, na które wskazują komunikaty Warning
$productLines = [];
foreach ($products as $product) {
    $price = $product["price"];
    $total = $total + $price;
    $productLines[] = $product["name"] . " - " . $price . " zł";
}

require "templates/03-header.php";
include "templates/03-manu.php";
require "templates/03-products.php";

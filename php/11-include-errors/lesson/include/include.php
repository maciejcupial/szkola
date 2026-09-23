<?php
// Lesson 25, slides 3-5 and 7: controller, the page from functions.php and views in templates/.
// No database needed; the database version is product-list.php.
header("Content-Type: text/html; charset=UTF-8");

require_once "functions.php";
require_once "functions.php";            // skipped, already loaded
// Fatal error: Cannot redeclare function formatPrice()
// require "functions.php";

// Prices as text, like rows from the database.
$products = [
    ["name" => "Kubek", "price" => "19.90"],
    ["name" => "Długopis", "price" => "4.20"],
];
$priceExample = formatPrice(19.9);       // 19.90 zł

require "templates/header.php";          // Sklep
require "templates/product-list.php";    // Kubek - 19.90 zł, Długopis - 4.20 zł
require "templates/include-demo.php";
// __DIR__ = this file's folder, so the path works from anywhere.
require __DIR__ . "/templates/footer.php";    // Kontakt: sklep@example.com

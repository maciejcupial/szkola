<?php
// Lesson 25, slide 6: controller; the model is connect-database.php and functions.php.
// Needs the shop database from lesson 21.
header("Content-Type: text/html; charset=UTF-8");

require_once "connect-database.php";
require_once "functions.php";

// $db comes from connect-database.php.
$products = getProducts($db);
mysqli_close($db);

require "templates/header.php";          // Sklep
require "templates/product-list.php";
// Kubek - 19.90 zł
// Długopis - 3.50 zł
// Zeszyt - 7.20 zł
require "templates/footer.php";          // Kontakt: sklep@example.com

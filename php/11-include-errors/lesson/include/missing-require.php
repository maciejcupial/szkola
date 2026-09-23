<?php
// test: skip
// Lesson 25, slide 4: require with a typo, fails on purpose; the page stops.
header("Content-Type: text/html; charset=UTF-8");

$products = [["name" => "Kubek", "price" => "19.90"]];
$message = "Tej linii nie zobaczysz, strona zatrzymała się na require.";

require "templates/header.php";
require "templates/product-list.php";
require "templates/fotter.php";
require "templates/message.php";

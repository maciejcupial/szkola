<?php
// test: skip
// Lesson 25, slide 4: include with a typo, warns on purpose; the page goes on.
header("Content-Type: text/html; charset=UTF-8");

$products = [["name" => "Kubek", "price" => "19.90"]];
$message = "Ta linia stoi za include, a mimo to się wyświetla.";

require "templates/header.php";
require "templates/product-list.php";
include "templates/fotter.php";
require "templates/message.php";

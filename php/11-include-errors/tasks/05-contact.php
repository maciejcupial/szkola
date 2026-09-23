<?php
// Task 5, second page (description in 05-home.php).
// Expected: title and heading „Kontakt”, Kontakt bold, „Napisz: kontakt@example.com”.
header("Content-Type: text/html; charset=UTF-8");

require_once "05-functions.php";

$pageTitle = "Kontakt";
$currentPage = "05-contact.php";
$pageText = "Napisz: kontakt@example.com";
$menuItems = menuItems();

require "templates/05-layout.php";

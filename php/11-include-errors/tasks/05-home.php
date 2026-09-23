<?php
// Task 5 of 6: one view for two pages; change only templates/05-layout.php.
// Expected (tab title „Start”):
//   Start
//   Start  Kontakt          (Start in bold, it is the current page)
//   Witaj na stronie głównej.
//   Moja strona, wszystkie podstrony z jednego szablonu.
// For 05-contact.php: tab title and heading „Kontakt”, Kontakt bold, then „Napisz: kontakt@example.com”.
header("Content-Type: text/html; charset=UTF-8");

require_once "05-functions.php";

$pageTitle = "Start";
$currentPage = "05-home.php";
$pageText = "Witaj na stronie głównej.";
$menuItems = menuItems();

require "templates/05-layout.php";

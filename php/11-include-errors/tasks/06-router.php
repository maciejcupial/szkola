<?php
// Task 6 of 6 (dla chętnych): the controller picks the view named in ?page=, only if allowed.
// Without the check ?page=../../secret could load any file. Expected, under the menu:
//   06-router.php               Start / Witaj w naszym sklepie z artykułami szkolnymi.
//   06-router.php?page=offer    Oferta / Kubki, długopisy i zeszyty w dobrych cenach.
//   06-router.php?page=contact  Kontakt / Napisz: sklep@example.com
//   06-router.php?page=abc      Nie ma takiej strony.
header("Content-Type: text/html; charset=UTF-8");

// Each name has a view templates/06-pages/<name>.php.
$allowedPages = ["home", "offer", "contact"];

// TU ZMIEŃ: $_GET["page"] ?? "home", sprawdź in_array(); dozwolona nazwa: jej widok z 06-pages,
// każda inna: templates/06-not-found.php
$view = "templates/06-pages/home.php";

require "templates/06-header.php";
require $view;
require "templates/06-footer.php";

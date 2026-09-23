<?php
// Task 5 of 6: one layout for two pages; change only 05-layout-top.php.
// Expected (tab title „Start”):
//   Start
//   Start  Kontakt          (Start in bold, it is the current page)
//   Witaj na stronie głównej.
//   Moja strona, wszystkie podstrony z jednego szablonu.
// For 05-contact.php: tab title and heading „Kontakt”, Kontakt bold, then „Napisz: kontakt@example.com”.
header("Content-Type: text/html; charset=UTF-8");

// Set before the include: the layout reads them.
$pageTitle = "Start";
$currentPage = "05-home.php";

include "05-layout-top.php";
?>
    <p>Witaj na stronie głównej.</p>
<?php
include "05-layout-bottom.php";

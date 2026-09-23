<?php
// Task 5, second page (description in 05-home.php).
// Expected: title and heading „Kontakt”, Kontakt bold, „Napisz: kontakt@example.com”.
header("Content-Type: text/html; charset=UTF-8");

$pageTitle = "Kontakt";
$currentPage = "05-contact.php";

include "05-layout-top.php";
?>
    <p>Napisz: kontakt@example.com</p>
<?php
include "05-layout-bottom.php";

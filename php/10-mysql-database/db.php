<?php
// Shared connection: index.php and every task include it with require.

// PHP 8.1+ throws on a failed query; this brings back "returns false".
mysqli_report(MYSQLI_REPORT_OFF);

// TU ZMIEŃ: dane logowania, jeśli twój MySQL ma inne niż domyślne w XAMPP.
$db = mysqli_connect("localhost", "root", "", "shop_tasks");

if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

// Without it Polish letters can turn into question marks.
mysqli_set_charset($db, "utf8mb4");

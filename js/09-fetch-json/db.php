<?php
// Shared connection: api/products.php and the PHP files in tasks/ include it with require.

// PHP 8.1+ throws on a failed connection; this brings back "returns false".
mysqli_report(MYSQLI_REPORT_OFF);

// TU ZMIEŃ: dane logowania, jeśli twój MySQL ma inne niż domyślne w XAMPP.
// @ hides the PHP warning on a failed connection, so the answer below stays pure JSON.
$db = @mysqli_connect("localhost", "root", "", "shop");

if (!$db) {
    // An API answers in JSON even when it fails, so JavaScript can read the message.
    http_response_code(500);
    header("Content-Type: application/json");
    echo json_encode(["error" => "Brak połączenia z bazą danych."], JSON_UNESCAPED_UNICODE);
    exit;
}

// Without it Polish letters can turn into question marks.
mysqli_set_charset($db, "utf8mb4");

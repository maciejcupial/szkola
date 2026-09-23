<?php
// Database connection: every page requires this file and uses $pdo.

// TU ZMIEŃ: dane logowania do bazy (XAMPP: root bez hasła).
$host = "localhost";
$database = "school_crud";
$user = "root";
$password = "";

try {
    // Without charset=utf8mb4 Polish letters come back as question marks
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password, [
        // A failed query throws instead of quietly returning false
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Rows keyed by column name: $post["title"]
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    exit("Nie udało się połączyć z bazą: " . htmlspecialchars($e->getMessage()));
}

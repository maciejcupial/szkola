<?php
// Lesson 25, slide 6: second page sharing the connection and functions.
// Open add-product.html and send the form.
header("Content-Type: text/html; charset=UTF-8");

require_once "connect-database.php";
require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Wyślij formularz z add-product.html.");
}

$name = $_POST["productName"];
$price = (float) str_replace(",", ".", $_POST["productPrice"]);    // "2,50" and "2.50" both give 2.5

// Form values go through a prepared statement, never into the SQL text.
$stmt = mysqli_prepare($db, "INSERT INTO products (name, price) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "sd", $name, $price);
$result = mysqli_stmt_execute($stmt);

if (!$result) {
    echo "Błąd zapytania: " . htmlspecialchars(mysqli_error($db));
} else {
    echo "Dodano produkt nr " . mysqli_insert_id($db) . ": " . htmlspecialchars($name) . ", "
        . formatPrice($price);
}
// Dodano produkt nr 4: Linijka, 2.50 zł

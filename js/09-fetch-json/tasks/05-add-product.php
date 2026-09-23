<?php
// Task 5 of 5 (dla chętnych): ready API, do not change.
// POST with JSON {"name": "...", "price": ...} adds a product and answers 201 with it, or 400 with "error".

require __DIR__ . "/../db.php";

// A JSON body does not land in $_POST: read the raw request body and decode it.
$data = json_decode(file_get_contents("php://input"), true);
$name = trim((string) ($data["name"] ?? ""));
$price = (float) ($data["price"] ?? 0);

$status = 400;
$answer = ["error" => "Podaj nazwę i cenę większą od zera."];

if ($name !== "" && $price > 0) {
    $statement = mysqli_prepare($db, "INSERT INTO products (name, price) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "sd", $name, $price);
    if (mysqli_stmt_execute($statement)) {
        $status = 201;
        $answer = [
            "id" => mysqli_insert_id($db),
            "name" => $name,
            "price" => number_format($price, 2, ".", ""),
        ];
    } else {
        $status = 500;
        $answer = ["error" => "Nie udało się zapisać produktu."];
    }
}
mysqli_close($db);

http_response_code($status);
header("Content-Type: application/json");
echo json_encode($answer, JSON_UNESCAPED_UNICODE);

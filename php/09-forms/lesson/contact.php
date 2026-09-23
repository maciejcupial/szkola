<?php
// Receives contact.html; open that file, not this one.
// Lesson 18, slides 6-8.
header("Content-Type: text/html; charset=UTF-8");

// isset() avoids Warning: Undefined array key when opened without the form.
if (isset($_POST["userName"], $_POST["userMessage"])) {
    $name = $_POST["userName"];
    $message = $_POST["userMessage"];
    echo "Dziękujemy, " . htmlspecialchars($name) . "! Otrzymaliśmy wiadomość: "
        . htmlspecialchars($message);
    // Dziękujemy, Jan! Otrzymaliśmy wiadomość: Czesc
} else {
    echo "Brak danych z formularza. Otwórz contact.html i wyślij formularz.";
}

<?php
// contact.php with empty() and filter_var(); open contact-2.html.
// Lesson 19, slides 6-8.
header("Content-Type: text/html; charset=UTF-8");

// \" puts a quote inside a "..." string.
if (empty($_POST["userName"])) {
    $message = "Pole \"Imię\" jest wymagane.";
} elseif (empty($_POST["userMessage"])) {
    $message = "Pole \"Wiadomość\" jest wymagane.";
} elseif (empty($_POST["userEmail"])) {
    $message = "Pole \"E-mail\" jest wymagane.";
} else {
    $email = filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL);
    // === false, not == false
    if ($email === false) {
        $message = "Podaj poprawny adres e-mail.";
    } else {
        $message = "Dziękujemy, " . $_POST["userName"] . "! Odpiszemy na " . $email;
    }
}
// userName="", userEmail=jan@example.com:            Pole "Imię" jest wymagane.
// userName=Jan, userMessage="":                      Pole "Wiadomość" jest wymagane.
// userName=Jan, userMessage=Czesc, userEmail="":     Pole "E-mail" jest wymagane.
// userName=Jan, userMessage=Czesc, userEmail=janek-at-example:
//     Podaj poprawny adres e-mail.
// userName=Jan, userMessage=Czesc, userEmail=jan@example.com:
//     Dziękujemy, Jan! Odpiszemy na jan@example.com
// Opened directly: Pole "Imię" jest wymagane.
?>
<p><?= htmlspecialchars($message) ?></p>

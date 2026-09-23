<?php
// Receives contact.html; open that file, not this one.
// Lesson 18, slides 6-8.
header("Content-Type: text/html; charset=UTF-8");

// isset() avoids Warning: Undefined array key when opened without the form.
$isSent = isset($_POST["userName"], $_POST["userMessage"]);
if ($isSent) {
    $name = $_POST["userName"];
    $message = $_POST["userMessage"];
}
?>
<?php if ($isSent): ?>
<p>Dziękujemy, <?= htmlspecialchars($name) ?>! Otrzymaliśmy wiadomość: <?= htmlspecialchars($message) ?></p>
<?php // Dziękujemy, Jan! Otrzymaliśmy wiadomość: Czesc ?>
<?php else: ?>
<p>Brak danych z formularza. Otwórz contact.html i wyślij formularz.</p>
<?php endif; ?>

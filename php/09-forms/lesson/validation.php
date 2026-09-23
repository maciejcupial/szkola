<?php
// empty() and filter_var() on plain values.
// Lesson 19, slides 3-5.
header("Content-Type: text/html; charset=UTF-8");

function checkContact($userName, $userEmail) {
    if (empty($userName)) {
        return "Pole \"Imię\" jest wymagane.";
    }
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        return "Podaj poprawny adres e-mail.";
    }
    return "Dziękujemy, " . $userName . "! Odpiszemy na " . $userEmail;
}

// Heading => lines shown under it.
// var_export() gives true/false as text; echo would print 1 or nothing.
$sections = [
    "Lekcja 19, slajd 3: funkcja empty()" => [
        var_export(empty(""), true),      // true
        var_export(empty("Jan"), true),   // false
        var_export(empty("0"), true),     // true, „0” counts as empty
        var_export(empty(null), true),    // true
        var_export(empty(" "), true),     // false, a space is a character
        var_export(empty($field), true),  // true, no warning for a missing variable
        var_export(empty($_POST["userName"]), true),   // true
    ],
    "Lekcja 19, slajd 4: filter_var() z FILTER_VALIDATE_EMAIL" => [
        var_export(filter_var("jan@example.com", FILTER_VALIDATE_EMAIL), true),    // 'jan@example.com'
        var_export(filter_var("janek-at-example", FILTER_VALIDATE_EMAIL), true),   // false
        // SANITIZE only drops characters, it does not validate.
        var_export(filter_var("jan kowal@example.com", FILTER_SANITIZE_EMAIL), true),
        // 'jankowal@example.com'
        var_export(filter_var("janek-at-example", FILTER_SANITIZE_EMAIL), true),   // 'janek-at-example'
    ],
    "Lekcja 19, slajd 5: najpierw empty(), potem filter_var()" => [
        checkContact("", "jan@example.com"),       // Pole "Imię" jest wymagane.
        checkContact("Jan", "janek-at-example"),   // Podaj poprawny adres e-mail.
        checkContact("Jan", "jan@example.com"),    // Dziękujemy, Jan! Odpiszemy na jan@example.com
    ],
];
?>
<?php foreach ($sections as $heading => $lines): ?>
<h2><?= htmlspecialchars($heading) ?></h2>
<?php foreach ($lines as $line): ?>
<?= htmlspecialchars($line) ?><br>
<?php endforeach; ?>
<?php endforeach; ?>

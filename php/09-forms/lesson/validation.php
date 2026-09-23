<?php
// empty() and filter_var() on plain values.
// Lesson 19, slides 3-5.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 19, slajd 3: funkcja empty()</h2>";
// var_export() prints true/false; echo would print 1 or nothing.
echo var_export(empty(""), true) . "<br>";      // true
echo var_export(empty("Jan"), true) . "<br>";   // false
echo var_export(empty("0"), true) . "<br>";     // true, „0” counts as empty
echo var_export(empty(null), true) . "<br>";    // true
echo var_export(empty(" "), true) . "<br>";     // false, a space is a character
echo var_export(empty($field), true) . "<br>";  // true, no warning for a missing variable
echo var_export(empty($_POST["userName"]), true) . "<br>";   // true

echo "<h2>Lekcja 19, slajd 4: filter_var() z FILTER_VALIDATE_EMAIL</h2>";
echo var_export(filter_var("jan@example.com", FILTER_VALIDATE_EMAIL), true) . "<br>";
// 'jan@example.com'
echo var_export(filter_var("janek-at-example", FILTER_VALIDATE_EMAIL), true) . "<br>";
// false
// SANITIZE only drops characters, it does not validate.
echo var_export(filter_var("jan kowal@example.com", FILTER_SANITIZE_EMAIL), true) . "<br>";
// 'jankowal@example.com'
echo var_export(filter_var("janek-at-example", FILTER_SANITIZE_EMAIL), true) . "<br>";
// 'janek-at-example'

echo "<h2>Lekcja 19, slajd 5: najpierw empty(), potem filter_var()</h2>";
function checkContact($userName, $userEmail) {
    if (empty($userName)) {
        return "Pole \"Imię\" jest wymagane.";
    }
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        return "Podaj poprawny adres e-mail.";
    }
    return "Dziękujemy, " . $userName . "! Odpiszemy na " . $userEmail;
}
echo htmlspecialchars(checkContact("", "jan@example.com")) . "<br>";
// Pole "Imię" jest wymagane.
echo htmlspecialchars(checkContact("Jan", "janek-at-example")) . "<br>";
// Podaj poprawny adres e-mail.
echo htmlspecialchars(checkContact("Jan", "jan@example.com")) . "<br>";
// Dziękujemy, Jan! Odpiszemy na jan@example.com

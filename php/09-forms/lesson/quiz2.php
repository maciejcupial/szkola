<?php
// Exam question and control questions.
// Lesson 19, slides 7 and 9.
header("Content-Type: text/html; charset=UTF-8");

// EE.09 czerwiec 2021 zad. 9
$nameErr = "";
if (empty($_POST["name"])) { $nameErr = "Name is required"; }
// Question 2 (EE.09 styczeń 2020 zad. 24) has no code: answer D.

$e = "janek@";
$price = 0;

// Heading => lines shown under it.
$sections = [
    "Lekcja 19, slajd 7, pytanie 1: do czego służy ten fragment?" => [
        $nameErr,   // Name is required, answer C
    ],
    "Lekcja 19, slajd 9, pytanie 1: empty() na zmiennej, której nie ma" => [
        var_export(empty($field), true),   // true, no warning
    ],
    "Lekcja 19, slajd 9, pytanie 2: filter_var() na złym adresie" => [
        var_export(filter_var($e, FILTER_VALIDATE_EMAIL), true),   // false
    ],
    "Lekcja 19, slajd 9: empty() na cenie równej zero" => [
        var_export(empty($price), true),   // true: empty() rejects a price of 0
        var_export($price === 0, true),    // true
    ],
];
?>
<?php foreach ($sections as $heading => $lines): ?>
<h2><?= htmlspecialchars($heading) ?></h2>
<?php foreach ($lines as $line): ?>
<?= htmlspecialchars($line) ?><br>
<?php endforeach; ?>
<?php endforeach; ?>

<?php
// Exam question and control questions.
// Lesson 19, slides 7 and 9.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 19, slajd 7, pytanie 1: do czego służy ten fragment?</h2>";
// EE.09 czerwiec 2021 zad. 9
$nameErr = "";
if (empty($_POST["name"])) { $nameErr = "Name is required"; }
echo $nameErr;   // Name is required, answer C
// Question 2 (EE.09 styczeń 2020 zad. 24) has no code: answer D.

echo "<h2>Lekcja 19, slajd 9, pytanie 1: empty() na zmiennej, której nie ma</h2>";
echo var_export(empty($field), true);   // true, no warning
echo "<br>";

echo "<h2>Lekcja 19, slajd 9, pytanie 2: filter_var() na złym adresie</h2>";
$e = "janek@";
echo var_export(filter_var($e, FILTER_VALIDATE_EMAIL), true);   // false
echo "<br>";

echo "<h2>Lekcja 19, slajd 9: empty() na cenie równej zero</h2>";
$price = 0;
echo var_export(empty($price), true);   // true: empty() rejects a price of 0
echo "<br>";
echo var_export($price === 0, true);    // true

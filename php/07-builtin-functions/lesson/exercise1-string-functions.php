<?php
// Lesson 13, slide 8: model solution of exercise 1.
header("Content-Type: text/html; charset=UTF-8");

$text = " Ala ma kota ";

// Step 2
$trimmed = trim($text);
echo "[" . $trimmed . "]<br>";      // [Ala ma kota]

// Step 3: work on $trimmed, not $text
$upper = strtoupper($trimmed);
echo $upper . "<br>";               // ALA MA KOTA

// Step 4
$replaced = str_replace("kota", "psa", $trimmed);
echo $replaced . "<br>";            // Ala ma psa

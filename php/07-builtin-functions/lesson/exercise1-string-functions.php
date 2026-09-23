<?php
// Lesson 13, slide 8: model solution of exercise 1.
header("Content-Type: text/html; charset=UTF-8");

$text = " Ala ma kota ";

// Step 2
$trimmed = trim($text);                              // Ala ma kota
// Step 3: work on $trimmed, not $text
$upper = strtoupper($trimmed);                       // ALA MA KOTA
// Step 4
$replaced = str_replace("kota", "psa", $trimmed);    // Ala ma psa
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funkcje na tekst</title>
</head>
<body>
  <p>[<?= htmlspecialchars($trimmed) ?>]</p>
  <p><?= htmlspecialchars($upper) ?></p>
  <p><?= htmlspecialchars($replaced) ?></p>
</body>
</html>

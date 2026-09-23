<?php
// Lesson 14, slide 8: model solution of exercise 1.
header("Content-Type: text/html; charset=UTF-8");

// Step 2
$a = round(4.5);        // 5
$b = round(4.49);       // 4

// Step 3
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";

// Step 4
$today = date("d.m.Y");     // e.g. 15.06.2030

// Dla szybkich:
$isInt = is_int($stringValue);      // false
$type = gettype($stringValue);      // string
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funkcje na liczby</title>
</head>
<body>
  <p>round(4.5) = <?= $a ?></p>
  <p>round(4.49) = <?= $b ?></p>
  <!-- var_dump() prints by itself: int(5), float(4.5), string(1) "5" -->
  <pre><?php var_dump($intValue); ?>
<?php var_dump($floatValue); ?>
<?php var_dump($stringValue); ?></pre>
  <p><?= $today ?></p>
  <pre><?php var_dump($isInt); ?>
<?= $type ?></pre>
</body>
</html>

<?php
// Task 1 of 5: print four variables with var_dump() and one sentence.
// Expected:
//   string(3) "Ola"
//   int(17)
//   float(1.65)
//   bool(false)
//   Ola ma 17 lat i 1.65 m wzrostu.

$name = "Ola";
$age = 17;
$height = 1.65;
$isAdult = false;

// TU ZMIEŃ: sklej kropką imię, wiek i wzrost w zdanie
$sentence = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: przedstaw się</title>
</head>
<body>
  <h1>Zadanie 1: przedstaw się</h1>
  <p>Wypisz typ i wartość każdej zmiennej funkcją <code>var_dump()</code>, a pod spodem zdanie
    „Ola ma 17 lat i 1.65 m wzrostu.”, sklejone kropką.</p>

  <pre><?php
      // TU ZMIEŃ: cztery linie var_dump(), po jednej dla każdej zmiennej
  ?></pre>

  <p><?= htmlspecialchars($sentence) ?></p>
</body>
</html>

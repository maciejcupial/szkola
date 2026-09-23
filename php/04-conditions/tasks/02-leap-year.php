<?php
// Task 2 of 5: leap year with %, && and ||, words with ?:.
// Expected: Rok 2024 jest przestępny, luty ma 29 dni.
// Also: 2026 (zwykły, 28 dni), 1900 (zwykły, 28 dni), 2000 (przestępny, 29 dni).
header("Content-Type: text/html; charset=UTF-8");

$year = 2024;

// TU ZMIEŃ: zamiast false wpisz warunek z %, && i || (wynik to true albo false)
$isLeap = false;

// TU ZMIEŃ: zamień dwie linie niżej na operator ? : zależny od $isLeap
$yearType = "zwykły";
$februaryDays = 28;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: rok przestępny</title>
</head>
<body>
  <h1>Zadanie 2: rok przestępny</h1>
  <p>Rok jest przestępny, gdy dzieli się przez 4, ale nie przez 100, albo gdy dzieli się przez 400.
    Zapisz tę regułę jednym warunkiem, a słowa na stronie wybierz operatorem <code>? :</code>.</p>
  <p>Rok <?= $year ?> jest <?= htmlspecialchars($yearType) ?>, luty ma <?= $februaryDays ?> dni.</p>
</body>
</html>

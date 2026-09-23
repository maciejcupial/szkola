<?php
// Task 2 of 5: fix three lines that build the wrong text.
// Expected:
//   Cześć, Kuba!
//   Mieszkasz w mieście Gdynia.
//   Za rok będziesz mieć 18 lat.

$name = "Kuba";
$city = "Gdynia";
$age = 17;

// TU ZMIEŃ: ta linia daje „Cześć, $name!” zamiast imienia
$greeting = 'Cześć, $name!';

// TU ZMIEŃ: ta linia daje „Mieszkasz w mieścieGdynia.”
$cityLine = "Mieszkasz w mieście" . $city . ".";

// TU ZMIEŃ: ta linia daje 171 zamiast 18
$nextYearLine = "Za rok będziesz mieć " . $age . 1 . " lat.";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: napraw wypisywanie</title>
</head>
<body>
  <h1>Zadanie 2: napraw wypisywanie</h1>
  <p>Każda z trzech linii na górze pliku działa, ale wypisuje coś innego, niż powinna.
    Znajdź błąd w każdej z nich i popraw go.</p>

  <p>
    <?= htmlspecialchars($greeting) ?><br>
    <?= htmlspecialchars($cityLine) ?><br>
    <?= htmlspecialchars($nextYearLine) ?>
  </p>
</body>
</html>

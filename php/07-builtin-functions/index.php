<?php
// Worked example: a weather station card built only from built-in functions.
header("Content-Type: text/html; charset=UTF-8");

// TU ZMIEŃ: wpisz swoje miasto (ze spacjami na brzegach) i swoją temperaturę
$rawCity = " kraków ";
$temperature = 21.6789;

// A built-in function never changes its argument: save the returned value.
$trimmed = trim($rawCity);          // "kraków"
$city = ucfirst($trimmed);          // "Kraków"
$upper = strtoupper($city);         // "KRAKóW", no Polish letters
$mbUpper = mb_strtoupper($city);    // "KRAKÓW"

// strlen() counts bytes: „ó” takes 2 in UTF-8.
$cityBytes = strlen($city);         // 7
$cityLength = mb_strlen($city);     // 6

// The inner call runs first.
$cityInOneLine = ucfirst(trim($rawCity));

// str_replace(search, replace, subject)
$headline = str_replace("miasto", $city, "Pogoda: miasto");   // "Pogoda: Kraków"

$roundedWhole = round($temperature);        // 22
$roundedOne = round($temperature, 1);       // 21.7
$roundedHalf = round(4.5);                  // 5
$roundedBelowHalf = round(4.49);            // 4

$reading = "21.7";
$readingIsInt = is_int($reading);   // false
$readingType = gettype($reading);   // string

// d day, m month, Y year, H hour, i minutes
$readDate = date("d.m.Y");          // 23.09.2026
$readTime = date("H:i");            // 10:15
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funkcje wbudowane</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 700px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    pre {
      background: #f2f2f2;
      padding: 12px;
    }
  </style>
</head>
<body>
  <h1><?= htmlspecialchars($headline) ?></h1>

  <h2>Funkcje na tekst</h2>
  <p>
    Przed trim(): [<?= htmlspecialchars($rawCity) ?>]<br>
    Po trim(): [<?= htmlspecialchars($trimmed) ?>]<br>
    Po ucfirst(): <?= htmlspecialchars($city) ?><br>
    W jednej linii: <?= htmlspecialchars($cityInOneLine) ?><br>
    strtoupper(): <?= htmlspecialchars($upper) ?><br>
    mb_strtoupper(): <?= htmlspecialchars($mbUpper) ?><br>
    strlen(): <?= $cityBytes ?>, mb_strlen(): <?= $cityLength ?>
  </p>

  <h2>Funkcje na liczby</h2>
  <p>
    Pomiar: <?= $temperature ?> °C<br>
    round() bez drugiego argumentu: <?= $roundedWhole ?> °C<br>
    round() do jednego miejsca: <?= $roundedOne ?> °C<br>
    round(4.5) = <?= $roundedHalf ?>, round(4.49) = <?= $roundedBelowHalf ?>
  </p>

  <h2>Typy danych</h2>
  <!-- var_dump() prints by itself, <pre> keeps its line breaks. -->
  <pre><?php var_dump($roundedWhole); ?>
<?php var_dump($reading); ?>
<?php var_dump($readingIsInt); ?>
<?= $readingType ?></pre>

  <h2>Data odczytu</h2>
  <p>Odczyt z dnia <?= $readDate ?>, godzina <?= $readTime ?></p>

  <!-- TU ZMIEŃ: dopisz linię, na przykład temperaturę zaokrągloną do dwóch miejsc (policz ją na górze) -->
</body>
</html>

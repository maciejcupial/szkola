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

// The inner call runs first.
$cityInOneLine = ucfirst(trim($rawCity));

// str_replace(search, replace, subject)
$headline = str_replace("miasto", $city, "Pogoda: miasto");   // "Pogoda: Kraków"

$roundedWhole = round($temperature);        // 22
$roundedOne = round($temperature, 1);       // 21.7

$reading = "21.7";
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
  <h1><?php echo htmlspecialchars($headline); ?></h1>

  <h2>Funkcje na tekst</h2>
  <p>
    <?php
        echo "Przed trim(): [" . htmlspecialchars($rawCity) . "]<br>";   // Przed trim(): [ kraków ]
        echo "Po trim(): [" . htmlspecialchars($trimmed) . "]<br>";      // Po trim(): [kraków]
        echo "Po ucfirst(): " . htmlspecialchars($city) . "<br>";        // Po ucfirst(): Kraków
        echo "W jednej linii: " . htmlspecialchars($cityInOneLine) . "<br>";   // W jednej linii: Kraków
        echo "strtoupper(): " . htmlspecialchars($upper) . "<br>";       // strtoupper(): KRAKóW
        echo "mb_strtoupper(): " . htmlspecialchars($mbUpper) . "<br>";  // mb_strtoupper(): KRAKÓW

        // strlen() counts bytes: „ó” takes 2 in UTF-8.
        echo "strlen(): " . strlen($city) . ", mb_strlen(): " . mb_strlen($city);
        // strlen(): 7, mb_strlen(): 6
    ?>
  </p>

  <h2>Funkcje na liczby</h2>
  <p>
    <?php
        echo "Pomiar: " . $temperature . " °C<br>";                    // Pomiar: 21.6789 °C
        echo "round() bez drugiego argumentu: " . $roundedWhole . " °C<br>";   // ... 22 °C
        echo "round() do jednego miejsca: " . $roundedOne . " °C<br>";  // ... 21.7 °C
        echo "round(4.5) = " . round(4.5) . ", round(4.49) = " . round(4.49);
        // round(4.5) = 5, round(4.49) = 4
    ?>
  </p>

  <h2>Typy danych</h2>
  <pre><?php
      var_dump($roundedWhole);    // float(22)
      var_dump($reading);         // string(4) "21.7"
      var_dump(is_int($reading)); // bool(false)
      echo gettype($reading);     // string
  ?></pre>

  <h2>Data odczytu</h2>
  <p>
    <?php
        // d day, m month, Y year, H hour, i minutes
        echo "Odczyt z dnia " . date("d.m.Y") . ", godzina " . date("H:i");
        // Odczyt z dnia 23.09.2026, godzina 10:15
    ?>
  </p>

  <!-- TU ZMIEŃ: dopisz własną linię, na przykład zaokrąglij temperaturę do dwóch miejsc -->
</body>
</html>

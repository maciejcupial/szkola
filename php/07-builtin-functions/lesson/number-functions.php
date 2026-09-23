<?php
// Lesson 14, slides 3-6: built-in functions for numbers and types.
header("Content-Type: text/html; charset=UTF-8");

// Slides 3 and 4
$half = round(4.5);                 // 5
$belowHalf = round(4.49);           // 4
$twoPlaces = round(3.14159, 2);     // 3.14

// Slide 5
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";
$bothFives = $intValue . " i " . $stringValue;   // 5 i 5

// Slides 3 and 6: d day, m month, Y year, H hour, i minutes
$today = date("d.m.Y");             // e.g. 15.06.2030
$time = date("H:i");                // e.g. 15:38
$dateTime = date("d.m.Y H:i");      // e.g. 15.06.2030 15:38
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funkcje na liczby i typy</title>
</head>
<body>
  <!-- var_dump() prints by itself, so it is called right here, inside <pre>. -->
  <h2>Slajd 3: trzy funkcje na liczby i typy</h2>
  <p><?= $half ?><br><?= $belowHalf ?></p>
  <pre><?php var_dump(5); ?></pre>
  <p><?= $today ?></p>

  <h2>Slajd 4: round() i próg w połowie drogi</h2>
  <p><?= $half ?><br><?= $belowHalf ?><br><?= $twoPlaces ?></p>
  <pre><?php var_dump($half); ?></pre>

  <h2>Slajd 5: var_dump() pokazuje typ obok wartości</h2>
  <pre><?php var_dump($intValue); ?>
<?php var_dump($floatValue); ?>
<?php var_dump($stringValue); ?></pre>
  <p><?= $bothFives ?></p>

  <h2>Slajd 6: date() i litery formatu</h2>
  <p><?= $today ?><br><?= $time ?><br><?= $dateTime ?></p>
</body>
</html>

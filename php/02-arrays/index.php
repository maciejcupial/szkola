<?php
// Arrays: a cinema programme. PHP lesson 02.

// header() must run before anything is printed.
header("Content-Type: text/html; charset=UTF-8");

// TU ZMIEŃ: wpisz filmy, które sam chciałbyś obejrzeć
$films = ["Diuna", "Shrek", "Coco", "Toy Story"];

// Adds at the end, index 4.
$films[] = "Minionki";

// The last index is count - 1.
$filmCount = count($films);
$lastFilm = $films[$filmCount - 1];

$ticket = [
    "film" => "Coco",
    "hall" => 3,
    "seat" => "F7",
    "price" => 22.5,
];

$ticket["snack"] = "popcorn";

$screenings = [
    ["film" => "Diuna", "hour" => "16:00", "hall" => 1],
    ["film" => "Shrek", "hour" => "18:30", "hall" => 2],
    ["film" => "Coco", "hour" => "20:15", "hall" => 3],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tablice w PHP</title>
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
  <h1>Kino na dziś</h1>

  <h2>Tablica zwykła</h2>
  <p>
    <?php
        echo "Pierwszy film: " . htmlspecialchars($films[0]) . "<br>";   // Pierwszy film: Diuna
        echo "Ostatni film: " . htmlspecialchars($lastFilm) . "<br>";    // Ostatni film: Minionki
        echo "Filmów w repertuarze: " . $filmCount;                      // Filmów w repertuarze: 5
    ?>
  </p>

  <ol>
    <?php
        foreach ($films as $film) {
            echo "<li>" . htmlspecialchars($film) . "</li>";
        }
    ?>
  </ol>

  <h2>Tablica asocjacyjna</h2>
  <p>
    <?php
        // Key in quotes: $ticket["seat"], never $ticket[seat].
        echo "Film " . htmlspecialchars($ticket["film"]) . ", sala " . $ticket["hall"]
            . ", miejsce " . htmlspecialchars($ticket["seat"]) . "<br>";
        // Film Coco, sala 3, miejsce F7
        echo "Cena biletu: " . $ticket["price"] . " zł";                  // Cena biletu: 22.5 zł
    ?>
  </p>

  <ul>
    <?php
        foreach ($ticket as $key => $value) {
            echo "<li>" . htmlspecialchars($key) . ": " . htmlspecialchars($value) . "</li>";
        }
        // film: Coco, hall: 3, seat: F7, price: 22.5, snack: popcorn
    ?>
  </ul>

  <h2>Podgląd całej tablicy</h2>
  <pre><?php
      print_r($ticket);
      var_dump($films);
  ?></pre>

  <h2>Tablica w tablicy</h2>
  <p>
    <?php
        echo "Drugi seans zaczyna się o " . htmlspecialchars($screenings[1]["hour"]);
        // Drugi seans zaczyna się o 18:30
    ?>
  </p>

  <ul>
    <?php
        foreach ($screenings as $screening) {
            echo "<li>" . htmlspecialchars($screening["hour"]) . " "
                . htmlspecialchars($screening["film"]) . " (sala " . $screening["hall"] . ")</li>";
        }
        // 16:00 Diuna (sala 1), 18:30 Shrek (sala 2), 20:15 Coco (sala 3)
    ?>
  </ul>

  <!-- TU ZMIEŃ: dopisz czwarty seans do $screenings i sprawdź, czy pojawił się na liście -->
</body>
</html>

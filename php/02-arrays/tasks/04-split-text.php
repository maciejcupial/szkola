<?php
// Task 4 of 5: split text into an array with explode(), then use mb_ functions.
// Expected:
//   Miast na liście: 6
//   Pierwsze: Warszawa, ostatnie: Poznań
//   a bulleted list:
//     WARSZAWA (znaków: 8)
//     KRAKÓW (znaków: 6)
//     GDAŃSK (znaków: 6)
//     ŁÓDŹ (znaków: 4)
//     WROCŁAW (znaków: 7)
//     POZNAŃ (znaków: 6)

header("Content-Type: text/html; charset=UTF-8");

$text = "Warszawa,Kraków,Gdańsk,Łódź,Wrocław";

// TU ZMIEŃ: podziel $text po przecinku: explode(",", $text)
$cities = [];

// TU ZMIEŃ: dopisz na koniec tablicy $cities miasto „Poznań”

// TU ZMIEŃ: liczba miast, pierwsze miasto i ostatnie miasto
$cityCount = 0;
$firstCity = "";
$lastCity = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: tekst na tablicę</title>
</head>
<body>
  <h1>Zadanie 4: tekst na tablicę</h1>
  <p>
    Podziel tekst z miastami funkcją <code>explode()</code>, dopisz Poznań, podaj liczbę miast,
    pierwsze i ostatnie, a potem wypisz każde miasto wielkimi literami z liczbą znaków.
  </p>

  <p>
    <?php
        echo "Miast na liście: " . $cityCount . "<br>";
        echo "Pierwsze: " . htmlspecialchars($firstCity) . ", ostatnie: " . htmlspecialchars($lastCity);
    ?>
  </p>

  <ul>
    <?php
        foreach ($cities as $city) {
            // TU ZMIEŃ: wypisz „WARSZAWA (znaków: 8)” przez mb_strtoupper() i mb_strlen()
            echo "<li>" . htmlspecialchars($city) . "</li>";
        }
    ?>
  </ul>
</body>
</html>

<?php
// Variables and strings: a library book card. PHP lesson 01.

// TU ZMIEŃ: wpisz dane swojej ulubionej książki
$title = "Pan Tadeusz";      // string
$pages = 344;                // int
$rating = 4.5;               // float: a dot, not a comma
$isAvailable = true;         // bool: no quotes

/* A multi-line comment:
   PHP skips everything in between. */

// Calculate first: inside "..." PHP never calculates.
$pagesPerDay = 43;
$days = $pages / $pagesPerDay;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zmienne i ciągi znaków</title>
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
  <h1>Karta książki</h1>

  <h2>Co siedzi w zmiennych</h2>
  <pre><?php
      var_dump($title);          // string(11) "Pan Tadeusz"
      var_dump($pages);          // int(344)
      var_dump($rating);         // float(4.5)
      var_dump($isAvailable);    // bool(true)
  ?></pre>

  <h2>Łączenie tekstu</h2>
  <p>
    <?php
        // htmlspecialchars() makes < > & " harmless; numbers do not need it.
        echo "Tytuł: " . htmlspecialchars($title) . ", stron: " . $pages . "<br>";
        // Tytuł: Pan Tadeusz, stron: 344

        echo "Ocena czytelników: $rating na 5<br>";
        // Ocena czytelników: 4.5 na 5

        echo 'W apostrofach zmienna się nie zmienia: $pages<br>';
        // W apostrofach zmienna się nie zmienia: $pages

        echo "Dostępna: " . $isAvailable . "<br>";
        // Dostępna: 1

        echo "Plus: " . ($pages + 1) . ", kropka: " . $pages . 1 . "<br>";
        // Plus: 345, kropka: 3441

        echo "Czytając $pagesPerDay strony dziennie, skończysz w $days dni.";
        // Czytając 43 strony dziennie, skończysz w 8 dni.
    ?>
  </p>

  <h2>Funkcje do ciągów</h2>
  <p>
    <?php
        // substr() counts from 0.
        echo htmlspecialchars(strtoupper($title)) . "<br>";                     // PAN TADEUSZ
        echo htmlspecialchars(str_replace("Pan", "Imć", $title)) . "<br>";      // Imć Tadeusz
        echo htmlspecialchars(substr($title, 0, 3)) . "<br>";                   // Pan

        // strlen() counts bytes (a Polish letter is 2), mb_strlen() counts letters.
        $word = "źdźbło";
        echo "strlen: " . strlen($word) . ", mb_strlen: " . mb_strlen($word) . "<br>";
        // strlen: 9, mb_strlen: 6

        // strtoupper() would leave ź and ł small.
        echo htmlspecialchars(mb_strtoupper($word));                            // ŹDŹBŁO
    ?>
  </p>

  <!-- TU ZMIEŃ: dopisz własną linię, na przykład skróć tytuł funkcją mb_substr() -->
</body>
</html>

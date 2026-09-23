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

// Build the text here. In the HTML below "<?=" prints it like echo,
// and htmlspecialchars() makes < > & " harmless.
$titleLine = "Tytuł: " . $title . ", stron: " . $pages;               // Tytuł: Pan Tadeusz, stron: 344
$ratingLine = "Ocena czytelników: $rating na 5";                       // Ocena czytelników: 4.5 na 5
$quotesLine = 'W apostrofach zmienna się nie zmienia: $pages';         // ... nie zmienia: $pages
$availableLine = "Dostępna: " . $isAvailable;                          // Dostępna: 1
$plusLine = "Plus: " . ($pages + 1) . ", kropka: " . $pages . 1;       // Plus: 345, kropka: 3441
$daysLine = "Czytając $pagesPerDay strony dziennie, skończysz w $days dni.";
// Czytając 43 strony dziennie, skończysz w 8 dni.

$upperTitle = strtoupper($title);                                      // PAN TADEUSZ
$changedTitle = str_replace("Pan", "Imć", $title);                     // Imć Tadeusz
// substr() counts from 0.
$shortTitle = substr($title, 0, 3);                                    // Pan

// strlen() counts bytes (a Polish letter is 2), mb_strlen() counts letters.
$word = "źdźbło";
$lengthLine = "strlen: " . strlen($word) . ", mb_strlen: " . mb_strlen($word);   // strlen: 9, mb_strlen: 6
// strtoupper() would leave ź and ł small.
$upperWord = mb_strtoupper($word);                                     // ŹDŹBŁO
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
    <?= htmlspecialchars($titleLine) ?><br>
    <?= htmlspecialchars($ratingLine) ?><br>
    <?= htmlspecialchars($quotesLine) ?><br>
    <?= htmlspecialchars($availableLine) ?><br>
    <?= htmlspecialchars($plusLine) ?><br>
    <?= htmlspecialchars($daysLine) ?>
  </p>

  <h2>Funkcje do ciągów</h2>
  <p>
    <?= htmlspecialchars($upperTitle) ?><br>
    <?= htmlspecialchars($changedTitle) ?><br>
    <?= htmlspecialchars($shortTitle) ?><br>
    <?= htmlspecialchars($lengthLine) ?><br>
    <?= htmlspecialchars($upperWord) ?>
  </p>

  <!-- TU ZMIEŃ: dopisz własną linię: policz ją na górze pliku, na przykład mb_substr(), i wypisz tutaj -->
</body>
</html>

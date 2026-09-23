<?php
// Lesson 13, slides 3-6: built-in functions for text.
header("Content-Type: text/html; charset=UTF-8");

function squareArea($side) {
    return $side * $side;
}

$text = " Ala ma kota ";
$trimmed = trim($text);

// Every slide gets its list of results; the page below only prints them.
$slides = [
    "Slajd 3: funkcja własna kontra funkcja wbudowana" => [
        squareArea(4),                              // 16
        strlen("Ala ma kota"),                      // 11
    ],
    "Slajd 4: cztery funkcje na tekst" => [
        strlen($text),                              // 13
        "[" . trim($text) . "]",                    // [Ala ma kota]
        "[" . strtoupper($text) . "]",              // [ ALA MA KOTA ]
        "[" . str_replace("kota", "psa", $text) . "]",   // [ Ala ma psa ]
        // strlen() counts bytes: „ł” takes 2 in UTF-8.
        strlen("zł"),                               // 3
        mb_strlen("zł"),                            // 2
    ],
    "Slajd 5: trim() przed i po" => [
        "[" . $text . "] strlen = " . strlen($text),         // [ Ala ma kota ] strlen = 13
        "[" . $trimmed . "] strlen = " . strlen($trimmed),   // [Ala ma kota] strlen = 11
        "[" . trim("   Ala   ma   kota   ") . "]",           // [Ala   ma   kota]
    ],
    "Slajd 6: str_replace() zamienia fragment" => [
        str_replace("kota", "psa", $trimmed),       // Ala ma psa
        // Swapped arguments: no error, the subject comes back unchanged.
        str_replace($trimmed, "kota", "psa"),       // psa
        str_replace("a", "-", "ala ma kota"),       // -l- m- kot-
    ],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funkcje na tekst</title>
</head>
<body>
  <?php foreach ($slides as $heading => $results): ?>
    <h2><?= htmlspecialchars($heading) ?></h2>
    <ul>
      <?php foreach ($results as $result): ?>
        <li><?= htmlspecialchars($result) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</body>
</html>

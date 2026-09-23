<?php
// Lesson 13, slides 2 and 7: "co wypisze?" quiz.
header("Content-Type: text/html; charset=UTF-8");

function sumUpTo($upTo) {
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;
        $i++;
    }
    return $sum;
}

// Warning: Undefined variable $sum
// echo $sum;
// Fatal error: Uncaught Error: Call to undefined function replace()
// echo replace("kota", "mysz", "ala ma kota");
// Fatal error: Uncaught ArgumentCountError
// echo strstr("ala ma psa");

$questions = [
    "1: rozgrzewka, funkcja z lekcji 12" => [
        sumUpTo(3),                                     // 6
    ],
    "2: egzamin, poprawna kolejność argumentów" => [
        str_replace("kota", "mysz", "ala ma kota"),     // ala ma mysz, odpowiedź D
    ],
    "3: egzamin, ta sama funkcja z zamienioną kolejnością" => [
        // Answer C: nothing found, no error, the subject comes back unchanged.
        str_replace("ala ma kota", "kota", "mysz"),     // mysz
    ],
    "4: egzamin, trzy funkcje na wielkość liter" => [
        strtoupper("ala ma psa"),                       // ALA MA PSA, odpowiedź A
        strtolower("ALA MA PSA"),                       // ala ma psa
        ucfirst("ala ma psa"),                          // Ala ma psa
    ],
    "5: liczenie znaków" => [
        strlen(" Ala ma kota "),                        // 13
    ],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Co wypisze? Funkcje na tekst</title>
</head>
<body>
  <?php foreach ($questions as $heading => $results): ?>
    <h2><?= htmlspecialchars($heading) ?></h2>
    <ul>
      <?php foreach ($results as $result): ?>
        <li><?= htmlspecialchars($result) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</body>
</html>

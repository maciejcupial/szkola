<?php
// Task 2 of 5: a game character card in an associative array.
// Expected:
//   Kaktus to łucznik na poziomie 12.
//   a bulleted list: nick: Kaktus, class: łucznik, level: 12, hp: 80, guild: Smoki
//   and in the grey box:
//   Array
//   (
//       [nick] => Kaktus
//       [class] => łucznik
//       [level] => 12
//       [hp] => 80
//       [guild] => Smoki
//   )

header("Content-Type: text/html; charset=UTF-8");

$player = [
    "nick" => "Kaktus",
    "class" => "łucznik",
    "level" => 12,
    "hp" => 80,
];

// TU ZMIEŃ: dodaj klucz "guild" z wartością "Smoki" (zapis do nowego klucza w nawiasach [])

// TU ZMIEŃ: sklej kropką zdanie „Kaktus to łucznik na poziomie 12.” z wartości $player
$sentence = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: karta postaci</title>
  <style>
    pre {
      background: #f2f2f2;
      padding: 12px;
    }
  </style>
</head>
<body>
  <h1>Zadanie 2: karta postaci</h1>
  <p>
    Dodaj do <code>$player</code> klucz <code>"guild"</code> z wartością <code>"Smoki"</code>,
    złóż zdanie z trzech wartości tablicy, wypisz wszystkie pary „klucz: wartość” i pokaż całą
    tablicę funkcją <code>print_r()</code>.
  </p>

  <p><?php echo htmlspecialchars($sentence); ?></p>

  <ul>
    <?php
        // TU ZMIEŃ: foreach ($player as $key => $value), w każdym <li> „klucz: wartość”
    ?>
  </ul>

  <pre><?php
      // TU ZMIEŃ: print_r($player);
  ?></pre>
</body>
</html>

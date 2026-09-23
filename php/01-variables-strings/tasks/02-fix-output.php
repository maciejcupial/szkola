<?php
// Task 2 of 5: fix three echo lines that print the wrong thing.
// Expected:
//   Cześć, Kuba!
//   Mieszkasz w mieście Gdynia.
//   Za rok będziesz mieć 18 lat.

$name = "Kuba";
$city = "Gdynia";
$age = 17;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: napraw wypisywanie</title>
</head>
<body>
  <h1>Zadanie 2: napraw wypisywanie</h1>
  <p>Każda z trzech linii poniżej działa, ale wypisuje coś innego, niż powinna.
    Znajdź błąd w każdej z nich i popraw go.</p>

  <p>
    <?php
        // TU ZMIEŃ: ta linia wypisuje „Cześć, $name!” zamiast imienia
        echo 'Cześć, $name!<br>';

        // TU ZMIEŃ: ta linia wypisuje „Mieszkasz w mieścieGdynia.”
        echo "Mieszkasz w mieście" . htmlspecialchars($city) . ".<br>";

        // TU ZMIEŃ: ta linia wypisuje 171 zamiast 18
        echo "Za rok będziesz mieć " . $age . 1 . " lat.";
    ?>
  </p>
</body>
</html>

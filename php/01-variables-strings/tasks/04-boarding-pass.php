<?php
// Task 4 of 5: print a boarding pass with the mb_ string functions.
// Expected:
//   Pasażer: ZOFIA KOŁODZIEJ
//   Kod lotu: ŁÓD-WRO-204
//   Imię i nazwisko ma 15 znaków, a strlen() liczy 16 bajtów.

$passenger = "Zofia Kołodziej";
$from = "Łódź";
$to = "Wrocław";
$flightNumber = 204;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: karta pokładowa</title>
</head>
<body>
  <h1>Zadanie 4: karta pokładowa</h1>
  <p>Wypisz pasażera wielkimi literami, kod lotu z pierwszych trzech liter obu miast
    i numeru lotu oraz długość imienia i nazwiska. W polskich słowach używaj funkcji
    z przedrostkiem <code>mb_</code>.</p>

  <p>
    <?php
        // mb_substr(text, start, length) counts letters, not bytes.

        // TU ZMIEŃ: wypisz „Pasażer: ” i imię z nazwiskiem wielkimi literami
        echo "Pasażer: <br>";

        // TU ZMIEŃ: kod lotu: 3 litery $from, myślnik, 3 litery $to, myślnik, $flightNumber
        echo "Kod lotu: <br>";

        // TU ZMIEŃ: wstaw w zdanie wynik mb_strlen() i strlen() dla $passenger
        echo "Imię i nazwisko ma 0 znaków, a strlen() liczy 0 bajtów.";
    ?>
  </p>
</body>
</html>

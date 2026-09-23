<?php
// Task 2 of 5: ticketPrice() returns the cinema ticket price after a discount (default 0).
// Expected:
//   Bilet normalny: 30,00 zł
//   Bilet ulgowy: 15,00 zł
//   Bilet seniora: 19,60 zł
header("Content-Type: text/html; charset=UTF-8");

// PHP ignores extra arguments, so the page runs before the second parameter exists.
// TU ZMIEŃ: dopisz drugi parametr $discountPercent z wartością domyślną 0
function ticketPrice($basePrice) {
    // TU ZMIEŃ: odejmij od ceny podany procent i zwróć wynik przez return (zamiast zera)
    return 0;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: cena biletu</title>
</head>
<body>
  <h1>Zadanie 2 z 5: cena biletu do kina</h1>
  <p>
    Dokończ funkcję <code>ticketPrice($basePrice, $discountPercent = 0)</code>. Zniżka 50 oznacza
    połowę ceny, brak drugiego argumentu oznacza bilet bez zniżki.
  </p>
<?php
// number_format(value, 2, ",", " ") gives a Polish decimal comma
echo "<p>Bilet normalny: " . number_format(ticketPrice(30), 2, ",", " ") . " zł</p>";
echo "<p>Bilet ulgowy: " . number_format(ticketPrice(30, 50), 2, ",", " ") . " zł</p>";
echo "<p>Bilet seniora: " . number_format(ticketPrice(24.5, 20), 2, ",", " ") . " zł</p>";
?>
</body>
</html>

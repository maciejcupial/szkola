<?php
// Task 5 of 5 (for volunteers): cinema ticket from the address, every construct at once.
// Base price: wt 18 zł, sb/nd 32 zł, pn/sr/czw/pt 26 zł, else 0 (unknown day).
// Discount: under 7 100%, under 18 or 65+ 30%, else student card 20% (&&).
// Expected: Cześć, gość! Bilet na pt: cena bazowa 26 zł, zniżka 30%, do zapłaty 18.2 zł.
// Also: ?name=Kuba&age=30&day=wt&student=tak (zniżka 20%, 14.4 zł), ?age=5&day=sb (wstęp wolny),
// ?day=xyz (Nie znam takiego dnia.).
header("Content-Type: text/html; charset=UTF-8");

// TU ZMIEŃ: cztery wartości czytaj z $_GET z wartością domyślną po ??
// Address values are text: (int) turns "30" into 30.
$name = "gość";
$age = 16;
$day = "pt";
$hasStudentCard = false;

// TU ZMIEŃ: zamiast 0 match ($day) z cenami z nagłówka
$basePrice = 0;

// TU ZMIEŃ: drabinka if ... elseif ... else dla wieku, potem if ze zniżką studencką (&&)
$discount = 0;

$finalPrice = $basePrice - $basePrice * $discount / 100;

// TU ZMIEŃ: zamiast tej linii operator ? : ("wstęp wolny" przy zniżce 100)
$priceText = "do zapłaty " . $finalPrice . " zł";

if ($basePrice === 0) {
    $ticketText = "Nie znam takiego dnia.";
} else {
    $ticketText = "Bilet na " . $day . ": cena bazowa " . $basePrice . " zł, zniżka " . $discount
        . "%, " . $priceText . ".";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: bilet do kina</title>
</head>
<body>
  <h1>Zadanie 5: bilet do kina (dla chętnych)</h1>
  <p>Odczytaj z adresu imię, wiek, dzień i legitymację studencką, na przykład
    <code>?name=Kuba&amp;age=30&amp;day=wt&amp;student=tak</code>. Cenę policz według zasad
    z komentarza na górze pliku.</p>
  <p>Cześć, <?= htmlspecialchars($name) ?>! <?= htmlspecialchars($ticketText) ?></p>
</body>
</html>

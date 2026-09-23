<?php
// Worked example: a café page built from own functions.
header("Content-Type: text/html; charset=UTF-8");

function celsiusToFahrenheit($celsius) {
    return $celsius * 9 / 5 + 32;
}

// A parameter with a default value must come last.
function priceWithVat($netPrice, $vatRate = 23) {
    $grossPrice = $netPrice + $netPrice * $vatRate / 100;
    return round($grossPrice, 2);
}

function orderTotal($prices) {
    $sum = 0;
    foreach ($prices as $price) {
        $sum += $price;
    }
    return $sum;
}

function describeTemperature($celsius) {
    $fahrenheit = celsiusToFahrenheit($celsius);
    return "$celsius °C to $fahrenheit °F";
}

$order = [9.5, 12, 7.5];

// Not the same variable as $sum inside orderTotal().
$sum = 1000;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kawiarnia: własne funkcje w PHP</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 640px;
      margin: 24px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <h1>Kawiarnia</h1>

  <h2>1. Parametr i return: temperatura napojów</h2>
<?php
echo "<p>" . celsiusToFahrenheit(0) . " °F</p>";     // 32 °F
echo "<p>" . celsiusToFahrenheit(20) . " °F</p>";    // 68 °F
echo "<p>" . celsiusToFahrenheit(37) . " °F</p>";    // 98.6 °F
?>

  <h2>2. Wartość domyślna: cena z VAT</h2>
<?php
echo "<p>Kawa: " . priceWithVat(10) . " zł</p>";         // Kawa: 12.3 zł
echo "<p>Ciastko: " . priceWithVat(10, 8) . " zł</p>";   // Ciastko: 10.8 zł
$coffeePrice = priceWithVat(10);
echo "<p>Dwie kawy: " . $coffeePrice * 2 . " zł</p>";    // Dwie kawy: 24.6 zł
?>

  <h2>3. Tablica jako argument: suma zamówienia</h2>
<?php
echo "<p>Ceny: " . htmlspecialchars(implode(", ", $order)) . "</p>";   // Ceny: 9.5, 12, 7.5
echo "<p>Razem: " . orderTotal($order) . " zł</p>";                    // Razem: 29 zł
?>

  <h2>4. Ta sama nazwa, dwie różne zmienne</h2>
<?php
echo "<p>Zmienna \$sum poza funkcją: $sum</p>";   // Zmienna $sum poza funkcją: 1000
$total = orderTotal($order);
echo "<p>Wynik zapisany w \$total: $total</p>";   // Wynik zapisany w $total: 29
?>

  <h2>5. Funkcja wywołuje funkcję</h2>
<?php
echo "<p>" . htmlspecialchars(describeTemperature(90)) . "</p>";   // 90 °C to 194 °F
?>
</body>
</html>

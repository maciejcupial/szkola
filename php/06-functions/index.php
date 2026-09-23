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

// 1. Parameter and return
$coldDrink = celsiusToFahrenheit(0);    // 32
$roomDrink = celsiusToFahrenheit(20);   // 68
$hotDrink = celsiusToFahrenheit(37);    // 98.6

// 2. Default value
$coffeePrice = priceWithVat(10);        // 12.3
$cookiePrice = priceWithVat(10, 8);     // 10.8
$twoCoffees = $coffeePrice * 2;         // 24.6

// 3. Array as an argument
$order = [9.5, 12, 7.5];
$orderList = implode(", ", $order);     // 9.5, 12, 7.5

// 4. Not the same variable as $sum inside orderTotal().
$sum = 1000;
$total = orderTotal($order);            // 29

// 5. A function that calls a function
$description = describeTemperature(90); // 90 °C to 194 °F
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
  <p><?= $coldDrink ?> °F</p>
  <p><?= $roomDrink ?> °F</p>
  <p><?= $hotDrink ?> °F</p>

  <h2>2. Wartość domyślna: cena z VAT</h2>
  <p>Kawa: <?= $coffeePrice ?> zł</p>
  <p>Ciastko: <?= $cookiePrice ?> zł</p>
  <p>Dwie kawy: <?= $twoCoffees ?> zł</p>

  <h2>3. Tablica jako argument: suma zamówienia</h2>
  <p>Ceny: <?= htmlspecialchars($orderList) ?></p>
  <p>Razem: <?= $total ?> zł</p>

  <h2>4. Ta sama nazwa, dwie różne zmienne</h2>
  <p>Zmienna $sum poza funkcją: <?= $sum ?></p>
  <p>Wynik zapisany w $total: <?= $total ?></p>

  <h2>5. Funkcja wywołuje funkcję</h2>
  <p><?= htmlspecialchars($description) ?></p>
</body>
</html>

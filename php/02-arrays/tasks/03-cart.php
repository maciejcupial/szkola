<?php
// Task 3 of 5: a shopping cart as an array of arrays.
// Expected:
//   Pierwszy produkt: Zeszyt A5 za 2.5 zł
//   Produktów w koszyku: 4
//   a bulleted list:
//     Zeszyt A5: 4 szt. po 2.5 zł = 10 zł
//     Długopis: 2 szt. po 3.2 zł = 6.4 zł
//     Plecak: 1 szt. po 89.99 zł = 89.99 zł
//     Linijka: 2 szt. po 1.5 zł = 3 zł

header("Content-Type: text/html; charset=UTF-8");

$cart = [
    ["name" => "Zeszyt A5", "price" => 2.5, "quantity" => 4],
    ["name" => "Długopis", "price" => 3.2, "quantity" => 2],
    ["name" => "Plecak", "price" => 89.99, "quantity" => 1],
];

// TU ZMIEŃ: dopisz do koszyka Linijkę, cena 1.5, sztuk 2: $cart[] = [...];

// TU ZMIEŃ: nazwa i cena pierwszego produktu: najpierw numer, potem klucz
$firstName = "";
$firstPrice = 0;
// TU ZMIEŃ: liczba produktów w koszyku
$productCount = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: koszyk</title>
</head>
<body>
  <h1>Zadanie 3: koszyk</h1>
  <p>
    Dopisz do koszyka linijkę (1.5 zł, 2 sztuki), odczytaj nazwę i cenę pierwszego produktu,
    policz produkty i wypisz paragon: przy każdym produkcie wynik mnożenia ceny przez liczbę sztuk.
  </p>

  <p>
    <?php
        echo "Pierwszy produkt: " . htmlspecialchars($firstName) . " za " . $firstPrice . " zł<br>";
        echo "Produktów w koszyku: " . $productCount;
    ?>
  </p>

  <ul>
    <?php
        foreach ($cart as $product) {
            // TU ZMIEŃ: zamiast 0 pomnóż cenę produktu przez liczbę sztuk
            $lineTotal = 0;

            // TU ZMIEŃ: dopisz do tej linii „4 szt. po 2.5 zł = ” przed kwotą
            echo "<li>" . htmlspecialchars($product["name"]) . ": " . $lineTotal . " zł</li>";
        }
    ?>
  </ul>
</body>
</html>

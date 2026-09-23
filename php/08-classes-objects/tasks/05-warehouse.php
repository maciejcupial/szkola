<?php
// Task 5 of 5 (optional): warehouse with a private array of Product objects.
// Expected:
//   Odmowa: cena produktu Kabel HDMI nie może być ujemna.
//   Klawiatura: 5 szt. x 120,00 zł = 600,00 zł
//   Mysz: 10 szt. x 45,00 zł = 450,00 zł
//   Monitor: 2 szt. x 699,99 zł = 1 399,98 zł
//   Kabel HDMI: 20 szt. x 15,00 zł = 300,00 zł
//   Wartość magazynu: 2 749,98 zł
//   Najtańszy produkt: Kabel HDMI (15,00 zł)
header("Content-Type: text/html; charset=UTF-8");

class Product {
    public $name;
    private $price = 0;
    private $quantity = 0;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->setPrice($price);
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    // Returns true when the price was saved, false when it was refused.
    public function setPrice($price) {
        // TU ZMIEŃ: gdy cena jest ujemna, zwróć false i zostaw cenę bez zmian.
        // W przeciwnym razie zapisz $price we właściwości $this->price i zwróć true
        return true;
    }

    public function getValue() {
        // TU ZMIEŃ: zwróć cenę pomnożoną przez liczbę sztuk
        return 0;
    }

    // Private $other->price is readable here: privacy is per class, not per object.
    public function isCheaperThan($other) {
        // TU ZMIEŃ: zwróć true, gdy $this->price jest mniejsze niż $other->price, inaczej false
        return false;
    }
}

class Warehouse {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    // number_format($x, 2, ",", " ") writes 1399.98 as „1 399,98”.
    public function getLines() {
        $lines = [];
        foreach ($this->products as $product) {
            $lines[] = $product->name . ": " . $product->getQuantity() . " szt. x "
                . number_format($product->getPrice(), 2, ",", " ") . " zł = "
                . number_format($product->getValue(), 2, ",", " ") . " zł";
        }
        return $lines;
    }

    public function getTotalValue() {
        // TU ZMIEŃ: zsumuj pętlą getValue() wszystkich produktów i zwróć wynik
        return 0;
    }

    // null means nothing found, e.g. an empty warehouse.
    public function getCheapest() {
        // TU ZMIEŃ: zacznij od $cheapest = null. W pętli po produktach podmień $cheapest, gdy jest
        // jeszcze null albo gdy $product->isCheaperThan($cheapest). Na końcu zwróć $cheapest
        return null;
    }
}

$warehouse = new Warehouse();
$warehouse->addProduct(new Product("Klawiatura", 120, 5));
$warehouse->addProduct(new Product("Mysz", 45, 10));
$warehouse->addProduct(new Product("Monitor", 699.99, 2));

$message = "";
$cable = new Product("Kabel HDMI", 0, 20);
if (!$cable->setPrice(-5)) {
    $message = "Odmowa: cena produktu " . $cable->name . " nie może być ujemna.";
}
$cable->setPrice(15);
$warehouse->addProduct($cable);

$productLines = $warehouse->getLines();
$totalValue = number_format($warehouse->getTotalValue(), 2, ",", " ");

$cheapest = $warehouse->getCheapest();
if ($cheapest === null) {
    $cheapestText = "brak";
} else {
    $cheapestText = $cheapest->name . " (" . number_format($cheapest->getPrice(), 2, ",", " ") . " zł)";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: magazyn</title>
</head>
<body>
  <h1>Zadanie 5 (dla chętnych): magazyn</h1>
  <p>Magazyn to obiekt, który trzyma w prywatnej tablicy inne obiekty: produkty. Dopisz setter ceny,
    który odrzuca cenę ujemną, wartość produktu, porównanie dwóch produktów, wartość całego
    magazynu i wyszukanie najtańszego produktu.</p>
  <h2>Wynik</h2>
  <?php if ($message !== ""): ?>
    <p><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>
  <?php foreach ($productLines as $line): ?>
    <p><?= htmlspecialchars($line) ?></p>
  <?php endforeach; ?>
  <p>Wartość magazynu: <?= $totalValue ?> zł</p>
  <p>Najtańszy produkt: <?= htmlspecialchars($cheapestText) ?></p>
</body>
</html>

<?php
// Task 5 of 5 (optional): pizza order with a select list, a number and a checkbox.
// Expected:
//   userName empty          -> Pole „Imię” jest wymagane.
//   pizza not a $menu key   -> Wybierz pizzę z listy.
//   quantity not 1 to 10    -> Podaj liczbę sztuk od 1 do 10.
//   consent not ticked      -> Zaznacz akceptację regulaminu.
//   userName = Jan, pizza = capricciosa, quantity = 2, consent ticked
//     -> Jan, zamówienie: Capricciosa x 2. Do zapłaty: 69,00 zł.
//   userName = Jan, pizza = diavola, quantity = 0, consent not ticked
//     -> Wybierz pizzę z listy.  Podaj liczbę sztuk od 1 do 10.  Zaznacz akceptację regulaminu.
//        (each under its field, and the name field still shows Jan)

class Product
{
    public $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

// Key = the value the select list sends.
$menu = [
    "margherita" => new Product("Margherita", 29.9),
    "capricciosa" => new Product("Capricciosa", 34.5),
    "hawaiian" => new Product("Hawajska", 32.0),
];

$userName = "";
$pizza = "";
$quantity = "";
$consent = false;
// Keyed by field name, e.g. $errors["pizza"].
$errors = [];
$summary = "";

if (isset($_POST["userName"])) {
    // TU ZMIEŃ: odczytaj pola (trim i ??); $consent = isset($_POST["consent"]);
    // pizzę sprawdź przez isset($menu[$pizza]) (nie ufaj liście), liczbę przez (int) $quantity.
    // Bez błędów: cena = $menu[$pizza]->getPrice() * sztuki, $summary z number_format().
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: zamówienie pizzy</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    form {
      display: grid;
      gap: 6px;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    .error {
      color: #b91c1c;
    }

    .ok {
      color: #15803d;
    }
  </style>
</head>
<body>
  <h1>Zadanie 5: zamówienie pizzy (dla chętnych)</h1>
  <p>Sprawdź wszystkie pola, pokaż błąd pod każdym złym polem i zachowaj wybory użytkownika.</p>

<?php if ($summary !== ""): ?>
  <p class="ok"><?= htmlspecialchars($summary) ?></p>
  <p><a href="05-pizza-order.php">Nowe zamówienie</a></p>
<?php else: ?>
  <form action="05-pizza-order.php" method="post" novalidate>
    <label for="name">Imię</label>
    <input id="name" name="userName" type="text">
    <!-- TU ZMIEŃ: value w polu powyżej i komunikat błędu pod nim (span class="error" id="error-name") -->

    <label for="pizza">Pizza</label>
    <select id="pizza" name="pizza">
      <option value="">wybierz…</option>
      <?php foreach ($menu as $key => $product): ?>
        <!-- TU ZMIEŃ: dopisz selected przy opcji, której $key jest równy $pizza -->
        <option value="<?= $key ?>">
          <?= htmlspecialchars($product->name) ?>, <?= number_format($product->getPrice(), 2, ",", " ") ?> zł
        </option>
      <?php endforeach; ?>
    </select>
    <!-- TU ZMIEŃ: komunikat błędu pod listą (id="error-pizza") -->

    <label for="quantity">Liczba sztuk</label>
    <input id="quantity" name="quantity" type="number">
    <!-- TU ZMIEŃ: value w polu powyżej i komunikat błędu pod nim (id="error-quantity") -->

    <!-- An unticked checkbox sends nothing -->
    <label>
      <input id="consent" name="consent" type="checkbox" value="yes">
      Akceptuję regulamin
    </label>
    <!-- TU ZMIEŃ: checked, gdy $consent jest true, i komunikat błędu (id="error-consent") -->

    <button type="submit">Zamów</button>
  </form>
<?php endif; ?>
</body>
</html>

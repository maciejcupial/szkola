<?php
// Task 4 of 6: a cart in $_SESSION["cart"] (product id => pieces) and its total.
// Expected:
//   at the start:  Koszyk jest pusty.  Razem: 0,00 zł
//   after „Dodaj” at Chleb twice and at Mleko once:
//     Chleb: 2 szt., 9,00 zł
//     Mleko: 1 szt., 3,20 zł
//     Razem: 12,20 zł
//   after „Wyczyść koszyk”:  Koszyk jest pusty.  Razem: 0,00 zł

session_start();

$products = [
    "bread" => ["name" => "Chleb", "price" => 4.50],
    "milk" => ["name" => "Mleko", "price" => 3.20],
    "apples" => ["name" => "Jabłka 1 kg", "price" => 5.99],
];

function cartTotal(array $cart, array $products): float
{
    $total = 0;
    // TU ZMIEŃ: foreach po $cart ($productId => $quantity), dodaj do $total cenę razy $quantity
    return $total;
}

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// TU ZMIEŃ: pole add z id z $products: zwiększ $_SESSION["cart"][id] o 1 (brak w koszyku: od 0)

// TU ZMIEŃ: gdy przyszło pole clear, zapisz w $_SESSION["cart"] pustą tablicę

$cart = $_SESSION["cart"];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: koszyk w sesji</title>
  <style>
    :root {
      --background: #f5f6f8;
      --text: #1f2430;
      --muted: #5b6472;
      --accent: #2563eb;
      --border: #d3d8e0;
      --card: #ffffff;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background: var(--background);
      color: var(--text);
      max-width: 540px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 20px;
    }

    .meta {
      color: var(--muted);
    }

    .error {
      color: #b91c1c;
    }

    .button {
      background: var(--accent);
      color: #ffffff;
      border: 0;
      border-radius: 6px;
      padding: 8px 14px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <main class="card">
    <h1>Zadanie 4: koszyk w sesji</h1>
    <h2>Produkty</h2>
    <form method="post" action="04-cart.php">
      <ul>
        <?php foreach ($products as $productId => $product): ?>
          <li>
            <?= htmlspecialchars($product["name"]) ?>, <?= number_format($product["price"], 2, ",", " ") ?> zł
            <?php // All share name="add"; the value is the product id. ?>
            <button class="button" type="submit" name="add" value="<?= htmlspecialchars($productId) ?>">
              Dodaj
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
    </form>

    <h2>Koszyk</h2>
    <?php if ($cart): ?>
      <ul>
        <?php foreach ($cart as $productId => $quantity): ?>
          <li>
            <?= htmlspecialchars($products[$productId]["name"]) ?>: <?= $quantity ?> szt.,
            <?= number_format($products[$productId]["price"] * $quantity, 2, ",", " ") ?> zł
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Koszyk jest pusty.</p>
    <?php endif; ?>
    <p><strong>Razem: <?= number_format(cartTotal($cart, $products), 2, ",", " ") ?> zł</strong></p>
    <form method="post" action="04-cart.php">
      <button class="button" type="submit" name="clear" value="1">Wyczyść koszyk</button>
    </form>
  </main>
</body>
</html>

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
            <?= htmlspecialchars($product["name"]) ?>, <?= htmlspecialchars($productPrices[$productId]) ?> zł
            <?php // All share name="add"; the value is the product id. ?>
            <button class="button" type="submit" name="add" value="<?= htmlspecialchars($productId) ?>">
              Dodaj
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
    </form>

    <h2>Koszyk</h2>
    <?php if ($cartLines): ?>
      <ul>
        <?php foreach ($cartLines as $line): ?>
          <li>
            <?= htmlspecialchars($line["name"]) ?>: <?= $line["quantity"] ?> szt.,
            <?= htmlspecialchars($line["value"]) ?> zł
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Koszyk jest pusty.</p>
    <?php endif; ?>
    <p><strong>Razem: <?= htmlspecialchars($totalText) ?> zł</strong></p>
    <form method="post" action="04-cart.php">
      <button class="button" type="submit" name="clear" value="1">Wyczyść koszyk</button>
    </form>
  </main>
</body>
</html>

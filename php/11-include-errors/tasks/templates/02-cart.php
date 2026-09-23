<?php
// Task 2: view. $cartLines and $total come from 02-cart.php.
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: koszyk</title>
</head>
<body>
  <h1>Koszyk</h1>
  <p>Zadanie 2: dopisz funkcje <code>lineTotal()</code> i <code>cartTotal()</code>
    w pliku <code>02-cart-functions.php</code>.</p>
  <ul>
    <?php foreach ($cartLines as $line): ?>
      <li><?= htmlspecialchars($line) ?></li>
    <?php endforeach; ?>
  </ul>
  <p>Do zapłaty: <strong><?= htmlspecialchars($total) ?></strong></p>
</body>
</html>

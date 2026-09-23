<?php
// Task 1 of 5: a shopping list in an indexed array.
// Expected:
//   Pierwsza rzecz: chleb
//   Ostatnia rzecz: ser
//   Rzeczy na liście: 5
//   a numbered list: 1. chleb, 2. mleko, 3. jajka, 4. masło, 5. ser

header("Content-Type: text/html; charset=UTF-8");

$shoppingList = ["chleb", "mleko", "jajka", "masło"];

// TU ZMIEŃ: dopisz na koniec listy „ser” (puste nawiasy [] po nazwie tablicy)

// TU ZMIEŃ: pierwsza rzecz z listy
$firstItem = "";
// TU ZMIEŃ: ostatnia rzecz z listy, przez count($shoppingList) - 1
$lastItem = "";
// TU ZMIEŃ: liczba rzeczy na liście, funkcją count()
$itemCount = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: lista zakupów</title>
</head>
<body>
  <h1>Zadanie 1: lista zakupów</h1>
  <p>
    Dopisz „ser” na koniec tablicy <code>$shoppingList</code>, odczytaj pierwszą i ostatnią rzecz,
    policz rzeczy funkcją <code>count()</code> i wypisz całą listę pętlą <code>foreach</code>.
  </p>

  <p>
    Pierwsza rzecz: <?= htmlspecialchars($firstItem) ?><br>
    Ostatnia rzecz: <?= htmlspecialchars($lastItem) ?><br>
    Rzeczy na liście: <?= $itemCount ?>
  </p>

  <ol>
    <!-- TU ZMIEŃ: foreach ($shoppingList as $item): ... endforeach; z <li> dla każdej rzeczy -->
  </ol>
</body>
</html>

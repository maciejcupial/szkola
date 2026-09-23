<?php
// Task 6 of 6 (for volunteers): chessboard with a loop inside a loop.
// Expected: 8×8 board, rows 8 (top) to 1, cells "a8" ... "h1"; a8 light, a1 dark.
header("Content-Type: text/html; charset=UTF-8");

$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];
$board = [];

// Dark when ($row + $col) % 2 === 1, with $col from 0.

// TU ZMIEŃ: pętla w pętli, która dla wierszy od 8 do 1 zapisuje $board[$row] = tablica 8 pól,
// każde pole to ["name" => "a8", "colour" => "light"] (colour: "dark" albo "light")
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 6: szachownica</title>
  <style>
    td, th {
      width: 40px;
      height: 40px;
      text-align: center;
    }
    .dark {
      background: #8b5a2b;
      color: #fff;
    }
    .light {
      background: #f0d9b5;
    }
  </style>
</head>
<body>
  <h1>Zadanie 6 dla chętnych: szachownica</h1>
  <p>Pod wierszem z literami zbuduj 8 wierszy planszy: od 8 na górze do 1 na dole. Każdy wiersz
    zaczyna się od numeru w <code>&lt;th&gt;</code>, potem 8 pól <code>&lt;td&gt;</code> z nazwą
    pola, na przykład „e4”. Pole a1 jest ciemne, a kolory zmieniają się na przemian.</p>
  <table>
    <tr>
      <th></th>
      <?php foreach ($letters as $letter): ?>
        <th><?= htmlspecialchars($letter) ?></th>
      <?php endforeach; ?>
    </tr>
    <?php foreach ($board as $row => $cells): ?>
      <tr>
        <th><?= $row ?></th>
        <?php foreach ($cells as $cell): ?>
          <td class="<?= htmlspecialchars($cell["colour"]) ?>"><?= htmlspecialchars($cell["name"]) ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>

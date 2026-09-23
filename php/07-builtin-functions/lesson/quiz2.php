<?php
// Lesson 14, slides 3 and 7: "co wypisze?" quiz.
header("Content-Type: text/html; charset=UTF-8");

// 1 and 2
$roundResults = [
    round(4.5),         // 5
    round(4.49),        // 4
];
$examRoundResults = [
    round(0.29),        // 0
    round(0.60),        // 1, odpowiedź B
    round(-1.40),       // -1
    round(-4.60),       // -5
];

// 3
$fiveIsInt = is_int("5");       // false
$fiveType = gettype("5");       // string

// 4
$time = date("H:i:s");          // e.g. 15:38:20, odpowiedź A
// m is the month, not the minutes.
$wrongTime = date("G:m:s");     // e.g. 15:06:20
// Fatal error: Uncaught ArgumentCountError
// echo time("H:i:s");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Co wypisze? Funkcje na liczby</title>
</head>
<body>
  <h2>1: próg w połowie drogi</h2>
  <ul>
    <?php foreach ($roundResults as $result): ?>
      <li><?= $result ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>2: egzamin, które wywołanie round() zwróci 1</h2>
  <ul>
    <?php foreach ($examRoundResults as $result): ?>
      <li><?= $result ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>3: ta sama piątka, dwa różne typy</h2>
  <!-- var_dump() prints by itself, so it is called right here, inside <pre>. -->
  <pre><?php var_dump(5); ?>
<?php var_dump(4.5); ?>
<?php var_dump("5"); ?>
<?php var_dump($fiveIsInt); ?>
<?= $fiveType ?></pre>

  <h2>4: egzamin, godzina:minuta:sekunda</h2>
  <p><?= $time ?><br><?= $wrongTime ?></p>
</body>
</html>

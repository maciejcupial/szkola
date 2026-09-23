<?php
// Task 5 of 5 (dla chętnych): a movie marathon planner with every operator.
// Expected:
//   Diuna: 2 h 46 min
//   Shrek: 1 h 30 min
//   Incepcja: 2 h 28 min
//   Razem: 6 h 44 min
//   Średnio: 134.7 min
//   Mieści się w 6 godzinach: bool(false)
header("Content-Type: text/html; charset=UTF-8");

// Length in minutes.
$films = [
    "Diuna" => 166,
    "Shrek" => 90,
    "Incepcja" => 148,
];
$eveningLimit = 6 * 60;

$totalMinutes = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: maraton filmowy</title>
</head>
<body>
  <h1>Zadanie 5 (dla chętnych): maraton filmowy</h1>
  <p>
    Zamień minuty każdego filmu na godziny i minuty, zsumuj czas wszystkich filmów, policz
    średnią długość i sprawdź, czy maraton zmieści się w 6 godzinach.
  </p>

  <ul>
    <?php
        // foreach (...): ... endforeach; is the same loop as with braces.
        foreach ($films as $title => $minutes):
            // TU ZMIEŃ: pełne godziny filmu (intdiv przez 60)
            $hours = 0;

            // TU ZMIEŃ: minuty, które zostają po pełnych godzinach (%)
            $restMinutes = 0;

            // TU ZMIEŃ: dodaj długość filmu do $totalMinutes (+=)
    ?>
      <li>
        <?= htmlspecialchars($title) ?>:
        <?= htmlspecialchars($hours) ?> h <?= htmlspecialchars($restMinutes) ?> min
      </li>
    <?php endforeach; ?>
  </ul>

  <?php
      // TU ZMIEŃ: godziny i minuty całego maratonu, tak samo jak w pętli
      $totalHours = 0;
      $totalRest = 0;

      // TU ZMIEŃ: średnia: suma / count($films), round(..., 1)
      $average = 0;

      // TU ZMIEŃ: czy $totalMinutes jest mniejsze lub równe $eveningLimit (<=)
      $fitsEvening = false;
  ?>
  <p>Razem: <?= htmlspecialchars($totalHours) ?> h <?= htmlspecialchars($totalRest) ?> min</p>
  <p>Średnio: <?= htmlspecialchars($average) ?> min</p>
  <p>Mieści się w 6 godzinach: <?php var_dump($fitsEvening); ?></p>
</body>
</html>

<?php
// Task 3 of 5: averageGrade($grades) returns the average, summed with foreach, rounded to 2.
// Expected:
//   Ala: 4.5
//   Bartek: 3.25
//   Celina: 5.33
//   Dawid: 1.33
header("Content-Type: text/html; charset=UTF-8");

function averageGrade($grades) {
    // TU ZMIEŃ: akumulator $sum, pętla foreach po $grades, na końcu return średniej
    return 0;
}

$register = [
    "Ala" => [5, 4, 5, 4],
    "Bartek" => [3, 4, 2, 4],
    "Celina" => [5, 5, 6],
    "Dawid" => [1, 2, 1],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: średnia ocen</title>
</head>
<body>
  <h1>Zadanie 3 z 5: średnia ocen</h1>
  <p>
    Dokończ funkcję <code>averageGrade($grades)</code>. Sumę policz pętlą <code>foreach</code>
    w zmiennej <code>$sum</code>, bez <code>array_sum</code>. Wynik zaokrąglij do dwóch miejsc.
  </p>
<?php
foreach ($register as $name => $grades) {
    echo "<p>" . htmlspecialchars($name) . ": " . averageGrade($grades) . "</p>";
}
?>
</body>
</html>

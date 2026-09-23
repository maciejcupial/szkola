<?php
// Task 4 of 5: print gettype(), is_int() as tak/nie and var_dump() for each value; count ints.
// Expected:
// Typ: integer, liczba całkowita: tak, var_dump: int(5)
// Typ: string, liczba całkowita: nie, var_dump: string(1) "5"
// Typ: double, liczba całkowita: nie, var_dump: float(4.5)
// Typ: string, liczba całkowita: nie, var_dump: string(3) "4.5"
// Typ: string, liczba całkowita: nie, var_dump: string(6) "pięć"
// Liczb całkowitych: 1 z 5
header("Content-Type: text/html; charset=UTF-8");

$values = [5, "5", 4.5, "4.5", "pięć"];

$rows = [];
$intCount = 0;
foreach ($values as $value) {
    // gettype() says "double" for a float.
    // TU ZMIEŃ: zbuduj w "text" początek linii z gettype() i „tak” albo „nie” z is_int(),
    // a przy liczbie całkowitej zwiększ $intCount
    $rows[] = ["value" => $value, "text" => "Typ: ?"];
}
// count() tells how many elements the array has.
$valueCount = count($values);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: jaki to typ?</title>
</head>
<body>
  <h1>Zadanie 4: jaki to typ?</h1>
  <p>Dla każdej wartości wypisz nazwę typu, odpowiedz „tak” albo „nie” na pytanie, czy to liczba
    całkowita, i pokaż wynik var_dump(). Na końcu policz liczby całkowite.</p>
  <!-- var_dump() prints by itself and ends the line, <pre> keeps the line breaks. -->
  <pre><?php foreach ($rows as $row): ?>
<?= htmlspecialchars($row["text"]) ?>, var_dump: <?php var_dump($row["value"]); ?>
<?php endforeach; ?>
Liczb całkowitych: <?= $intCount ?> z <?= $valueCount ?></pre>
</body>
</html>

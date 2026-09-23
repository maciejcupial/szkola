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

$intCount = 0;
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
  <pre><?php
      foreach ($values as $value) {
          // gettype() says "double" for a float; var_dump() ends the line by itself.
          // TU ZMIEŃ: wypisz linię dla jednej wartości i zwiększ $intCount przy liczbie całkowitej
          echo "Typ: ?\n";
      }
      // count() tells how many elements the array has.
      echo "Liczb całkowitych: " . $intCount . " z " . count($values);
  ?></pre>
</body>
</html>

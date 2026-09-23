<?php
// Task 1 of 5: rectangleArea($width, $height) returns the area with return.
// Expected:
//   Prostokąt 3 x 4: pole 12
//   Prostokąt 5 x 5: pole 25
//   Prostokąt 10 x 2: pole 20
header("Content-Type: text/html; charset=UTF-8");

function rectangleArea($width, $height) {
    // TU ZMIEŃ: policz pole prostokąta i zwróć je przez return (zamiast zera)
    return 0;
}

// [width, height]
$rectangles = [
    [3, 4],
    [5, 5],
    [10, 2],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: pole prostokąta</title>
</head>
<body>
  <h1>Zadanie 1 z 5: pole prostokąta</h1>
  <p>
    Dokończ funkcję <code>rectangleArea($width, $height)</code>: ma zwracać przez <code>return</code>
    iloczyn szerokości i wysokości. Wywołań poniżej nie zmieniaj.
  </p>
<?php
foreach ($rectangles as $rectangle) {
    $area = rectangleArea($rectangle[0], $rectangle[1]);
    echo "<p>Prostokąt " . $rectangle[0] . " x " . $rectangle[1] . ": pole $area</p>";
}
?>
</body>
</html>

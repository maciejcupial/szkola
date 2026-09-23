<?php
// Task 2 of 5: cars announce themselves in __construct and __destruct.
// Expected:
//   Na parking wjeżdża: Toyota Corolla
//   Na parking wjeżdża: Fiat Panda
//   Toyota Corolla, rocznik 2018
//   Fiat Panda, rocznik 2024
//   Z parkingu wyjeżdża: Toyota Corolla
//   Na parkingu zostaje: Fiat Panda
//   Z parkingu wyjeżdża: Fiat Panda
header("Content-Type: text/html; charset=UTF-8");

// Every line of the result goes onto the board; the page prints the board at the end.
class Parking {
    public $board = [];
}

class Car {
    public $parking;
    public $brand = "";
    public $model = "";
    public $year = 0;

    // TU ZMIEŃ: dopisz wartość domyślną 2024 dla parametru $year
    public function __construct($parking, $brand, $model, $year) {
        $this->parking = $parking;
        // TU ZMIEŃ: przepisz $brand, $model i $year do właściwości przez $this->
        // TU ZMIEŃ: dopisz na tablicę $this->parking->board[] napis „Na parking wjeżdża: ”
        // z marką i modelem
    }

    // TU ZMIEŃ: dopisz metodę public function __destruct(), która dopisze na tablicę
    // $this->parking->board[] napis „Z parkingu wyjeżdża: ” z marką i modelem
}

$parking = new Parking();
$car1 = new Car($parking, "Toyota", "Corolla", 2018);
// TU ZMIEŃ: utwórz $car2 = new Car($parking, "Fiat", "Panda"); bez rocznika,
// zadziała dopiero po dodaniu wartości domyślnej

$parking->board[] = $car1->brand . " " . $car1->model . ", rocznik " . $car1->year;
// TU ZMIEŃ: dopisz na tablicę tak samo drugie auto

// __destruct runs right here, not at the end of the script.
unset($car1);
// TU ZMIEŃ: dopisz na tablicę „Na parkingu zostaje: ” z marką i modelem drugiego auta
// TU ZMIEŃ: usuń $car2 przez unset(), żeby jego destruktor też zadziałał przed wypisaniem strony
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: parking</title>
</head>
<body>
  <h1>Zadanie 2: konstruktor i destruktor</h1>
  <p>Każde auto ma samo ogłosić, że wjeżdża na parking (w konstruktorze) i że z niego wyjeżdża
    (w destruktorze). Gdy nie podamy rocznika, auto ma dostać rok 2024.</p>
  <h2>Wynik</h2>
  <?php foreach ($parking->board as $line): ?>
    <p><?= htmlspecialchars($line) ?></p>
  <?php endforeach; ?>
</body>
</html>

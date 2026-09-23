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
<?php
class Car {
    public $brand = "";
    public $model = "";
    public $year = 0;

    // TU ZMIEŃ: dopisz wartość domyślną 2024 dla parametru $year
    public function __construct($brand, $model, $year) {
        // TU ZMIEŃ: przepisz trzy parametry do właściwości przez $this->
        // TU ZMIEŃ: wypisz „Na parking wjeżdża: ” z marką i modelem, na końcu <br>
    }

    // TU ZMIEŃ: dopisz metodę public function __destruct(), która wypisze
    // „Z parkingu wyjeżdża: ” z marką i modelem, na końcu <br>
}

$car1 = new Car("Toyota", "Corolla", 2018);
// TU ZMIEŃ: utwórz $car2 = new Car("Fiat", "Panda"); bez rocznika,
// zadziała dopiero po dodaniu wartości domyślnej

echo htmlspecialchars($car1->brand . " " . $car1->model . ", rocznik " . $car1->year) . "<br>";
// TU ZMIEŃ: wypisz tak samo drugie auto

// __destruct runs right here, not at the end of the script.
unset($car1);
// TU ZMIEŃ: wypisz „Na parkingu zostaje: ” z marką i modelem drugiego auta
// TU ZMIEŃ: usuń $car2 przez unset(), żeby jego destruktor też zadziałał przed końcem strony
?>
</body>
</html>

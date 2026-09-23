<?php
// Task 1 of 5: class Movie, two objects and a method using $this.
// Expected:
//   Matrix (1999)
//   Shrek (2001)
//   Po zmianie:
//   Matrix Reaktywacja (2003)
//   Shrek (2001)
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: filmy</title>
</head>
<body>
  <h1>Zadanie 1: klasa Movie</h1>
  <p>Dokończ metodę showInfo(), tak żeby wypisywała tytuł i rok w nawiasie. Utwórz drugi obiekt
    „Shrek” z roku 2001 i wywołaj showInfo() dla obu filmów.</p>
  <h2>Wynik</h2>
<?php
class Movie {
    public $title = "";
    public $year = 0;

    public function showInfo() {
        // TU ZMIEŃ: wypisz tytuł i rok, np. Matrix (1999), i <br>; użyj htmlspecialchars()
    }
}

$movie1 = new Movie();
$movie1->title = "Matrix";
$movie1->year = 1999;

// TU ZMIEŃ: utwórz $movie2 przez new Movie() i ustaw mu tytuł „Shrek” oraz rok 2001

$movie1->showInfo();
// TU ZMIEŃ: wywołaj showInfo() dla $movie2

$movie1->title = "Matrix Reaktywacja";
$movie1->year = 2003;
echo "Po zmianie:<br>";
$movie1->showInfo();
// TU ZMIEŃ: jeszcze raz wywołaj showInfo() dla $movie2, film ma się nie zmienić
?>
</body>
</html>

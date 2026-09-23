<?php
// Task 4 of 5: grade book, each student an object with a private list of grades.
// Expected:
//   Ocena 7 odrzucona: dozwolone są oceny od 1 do 6.
//   Ania: 5, 4, 6, średnia 5
//   Kuba: 3, 4, średnia 3.5
//   Ola: brak ocen, średnia 0
//   Najlepsza średnia: Ania (5)
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: dziennik ocen</title>
</head>
<body>
  <h1>Zadanie 4: dziennik ocen</h1>
  <p>Każdy uczeń to obiekt klasy Student z prywatną tablicą ocen. Dopisz dodawanie oceny
    (tylko od 1 do 6), liczenie średniej i wyszukanie ucznia z najlepszą średnią.</p>
  <h2>Wynik</h2>
<?php
class Student {
    public $name;
    private $grades = [];

    public function __construct($name) {
        $this->name = $name;
    }

    // Returns a copy of the array, not the array itself.
    public function getGrades() {
        return $this->grades;
    }

    public function addGrade($grade) {
        // TU ZMIEŃ: gdy ocena jest mniejsza od 1 albo większa od 6, wypisz
        // „Ocena 7 odrzucona: dozwolone są oceny od 1 do 6.” z właściwą oceną i <br>.
        // W przeciwnym razie dopisz ją na koniec tablicy: $this->grades[] = $grade;
    }

    public function getAverage() {
        // TU ZMIEŃ: gdy tablica ocen jest pusta, zwróć 0 (nie dziel przez zero).
        // W przeciwnym razie zwróć round(suma ocen / liczba ocen, 2)
        return 0;
    }
}

$gradeData = [
    "Ania" => [5, 4, 6],
    "Kuba" => [3, 7, 4],
    "Ola" => [],
];

$students = [];
foreach ($gradeData as $name => $grades) {
    $student = new Student($name);
    foreach ($grades as $grade) {
        $student->addGrade($grade);
    }
    $students[] = $student;
}

foreach ($students as $student) {
    $grades = $student->getGrades();
    if (count($grades) === 0) {
        $gradeText = "brak ocen";
    } else {
        $gradeText = implode(", ", $grades);
    }
    echo htmlspecialchars($student->name . ": " . $gradeText . ", średnia " . $student->getAverage());
    echo "<br>";
}

$bestName = "nikt";
$bestAverage = 0;
// TU ZMIEŃ: pętlą foreach przejdź po $students; gdy średnia ucznia jest większa niż $bestAverage,
// zapisz jego imię w $bestName, a średnią w $bestAverage

echo htmlspecialchars("Najlepsza średnia: " . $bestName . " (" . $bestAverage . ")") . "<br>";
?>
</body>
</html>

<?php
// Task 5 of 5 (dla chętnych): a grade book, an array in an array in an array.
// Expected:
//   Uczniów w dzienniku: 4
//   a bulleted list:
//     Ola: 5 4 6 6 (ocen: 4, średnia: 5.25)
//     Kuba: 3 4 5 4 (ocen: 4, średnia: 4)
//     Maja: 6 5 5 6 (ocen: 4, średnia: 5.5)
//     Tomek: 4 4 (ocen: 2, średnia: 4)

header("Content-Type: text/html; charset=UTF-8");

$students = [
    ["name" => "Ola", "grades" => [5, 4, 6]],
    ["name" => "Kuba", "grades" => [3, 4, 5, 4]],
    ["name" => "Maja", "grades" => [6, 5, 5, 6]],
];

// TU ZMIEŃ: dopisz Oli szóstkę: $students[0]["grades"][] = ...

// TU ZMIEŃ: dopisz nowego ucznia Tomka z ocenami 4 i 4 (cała tablica asocjacyjna w $students[])

// TU ZMIEŃ: liczba uczniów w dzienniku
$studentCount = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: dziennik ocen</title>
</head>
<body>
  <h1>Zadanie 5: dziennik ocen (dla chętnych)</h1>
  <p>
    Dopisz Oli ocenę 6, dodaj Tomka z ocenami 4 i 4, a potem przy każdym uczniu wypisz jego oceny,
    ich liczbę i średnią. Średnia to suma ocen podzielona przez ich liczbę.
  </p>

  <p><?php echo "Uczniów w dzienniku: " . $studentCount; ?></p>

  <ul>
    <?php
        foreach ($students as $student) {
            // Reset for every student.
            $sum = 0;

            echo "<li>" . htmlspecialchars($student["name"]) . ":";

            // TU ZMIEŃ: foreach po $student["grades"]: wypisz ocenę ze spacją, $sum = $sum + $grade;

            // TU ZMIEŃ: zamiast 0 liczba ocen tego ucznia i średnia (/ to dzielenie)
            $gradeCount = 0;
            $average = 0;

            echo " (ocen: " . $gradeCount . ", średnia: " . $average . ")</li>";
        }
    ?>
  </ul>
</body>
</html>

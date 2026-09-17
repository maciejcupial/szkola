<?php
// Lesson 9 (4Ti): model solution of exercise 1 (slide 9), the file students name grades.php.
// Expected averages: Anna 5, Bartek 2.67, Celina 1.5, Dawid 4.33, Ewa 1.67.
// The rows of Celina and Ewa are pink, their average is below 2. Highest average: 5.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/grades.php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oceny uczniów</title>
  <style>
    td, th { border: 1px solid #999; padding: 4px; }
    .warning { background: #ffd0d0; }
  </style>
</head>
<body>
  <h1>Oceny uczniów</h1>
  <table>
    <thead>
      <tr>
        <th scope="col">Imię</th>
        <th scope="col">Oceny</th>
        <th scope="col">Średnia</th>
      </tr>
    </thead>
    <tbody>
<?php
// Every student is an array with a name and an array of grades: an array inside an array.
$students = [
    ["name" => "Anna",   "grades" => [5, 4, 5, 6]],
    ["name" => "Bartek", "grades" => [3, 2, 3]],
    ["name" => "Celina", "grades" => [1, 2, 1, 2]],
    ["name" => "Dawid",  "grades" => [4, 4, 5]],
    ["name" => "Ewa",    "grades" => [2, 1, 2]],
];
$averages = [];
foreach ($students as $student) {            // singular inside the loop, plural is the whole array
    // round with the second argument 2 keeps two decimal places, without it 2.67 would become 3.
    $average = round(array_sum($student["grades"]) / count($student["grades"]), 2);
    $rowClass = $average < 2 ? ' class="warning"' : '';
    echo "      <tr$rowClass><td>" . $student["name"] . "</td><td>";
    foreach ($student["grades"] as $grade) {   // one echo per grade, an array cannot be printed at once
        echo $grade . " ";
    }
    echo "</td><td>$average</td></tr>\n";
    $averages[] = $average;                    // for fast students: collect the averages
}
?>
    </tbody>
  </table>

<?php
// For fast students: the highest average in the class.
echo "  <p>Najwyższa średnia: " . max($averages) . "</p>\n";   // 5
?>
</body>
</html>

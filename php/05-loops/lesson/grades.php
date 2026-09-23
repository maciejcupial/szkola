<?php
// Lesson 9, slide 9: exercise 1 solution.
// Expected: Anna 5, Bartek 2.67, Celina 1.5 (pink), Dawid 4.33, Ewa 1.67 (pink); max 5.
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
$students = [
    ["name" => "Anna",   "grades" => [5, 4, 5, 6]],
    ["name" => "Bartek", "grades" => [3, 2, 3]],
    ["name" => "Celina", "grades" => [1, 2, 1, 2]],
    ["name" => "Dawid",  "grades" => [4, 4, 5]],
    ["name" => "Ewa",    "grades" => [2, 1, 2]],
];
$averages = [];
foreach ($students as $student) {
    // Without the 2, round() gives 3 instead of 2.67.
    $average = round(array_sum($student["grades"]) / count($student["grades"]), 2);
    $rowClass = $average < 2 ? ' class="warning"' : '';
    echo "      <tr$rowClass><td>" . $student["name"] . "</td><td>";
    foreach ($student["grades"] as $grade) {
        echo $grade . " ";
    }
    echo "</td><td>$average</td></tr>\n";
    $averages[] = $average;                    // for fast students
}
?>
    </tbody>
  </table>

<?php
// For fast students.
echo "  <p>Najwyższa średnia: " . max($averages) . "</p>\n";   // 5
?>
</body>
</html>

<?php
// Lesson 6, slide 10: exercise 1 solution.
// Expected: 72 -> 4, 95 -> 6, 39 -> 1, 55 -> 3.
header("Content-Type: text/html; charset=UTF-8");

$percent = 72;
if ($percent >= 95) {
    $grade = 6;
} elseif ($percent >= 85) {
    $grade = 5;
} elseif ($percent >= 70) {
    $grade = 4;
} elseif ($percent >= 55) {
    $grade = 3;
} elseif ($percent >= 40) {
    $grade = 2;
} else {
    $grade = 1;
}
echo "Wynik: " . $percent . "% to ocena " . $grade;

// For fast students.
if ($grade === 1) {
    echo "<br>Poprawa w ciągu dwu tygodni.";
}

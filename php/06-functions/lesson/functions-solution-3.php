<?php
// Lesson 12, slide 9: model solution of the exercise.
header("Content-Type: text/html; charset=UTF-8");

function sumUpTo($upTo) {
    global $totalResult;       // dla szybkich
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;
        $i++;
    }
    $totalResult = $sum;       // dla szybkich
    return $sum;
}

echo sumUpTo(5) . "<br>";   // 15

// Warning: Undefined variable $sum
// echo $sum . "<br>";

// Dla szybkich:
echo $totalResult . "<br>";   // 15

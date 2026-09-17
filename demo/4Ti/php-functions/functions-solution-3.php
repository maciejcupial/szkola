<?php
// Lesson 12 (4Ti): model solution of the computer exercise from slide 9 of slajdy_3.html.
// Students add sumUpTo() to their own functions.php; here it is a separate file,
// because functions.php in this folder is the teacher's live-coding file.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/functions-solution-3.php
header("Content-Type: text/html; charset=UTF-8");

function sumUpTo($upTo) {
    global $totalResult;       // dla szybkich: furtka do zmiennej globalnej, punkt „dla szybkich”
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;            // the accumulator collects one number per turn of the loop
        $i++;
    }
    $totalResult = $sum;       // dla szybkich: kopia wyniku do zmiennej globalnej
    return $sum;
}

echo sumUpTo(5) . "<br>";   // 15

// Step 3 of the exercise: the line below shows Warning: Undefined variable $sum, because $sum
// lived only inside the function. Uncomment it, read the warning, then comment it back.
// echo $sum . "<br>";

// Dla szybkich: dzięki global powyżej wynik jest widoczny także poza funkcją.
echo $totalResult . "<br>";   // 15

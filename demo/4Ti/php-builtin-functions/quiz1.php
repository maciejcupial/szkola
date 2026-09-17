<?php
// Lesson 13 (4Ti): „co wypisze?” from slajdy_1.html, warm-up (slide 2) and the two exam
// questions (slide 7). Expected: 6, ala ma mysz, mysz, ALA MA PSA, ala ma psa, Ala ma psa, 13.
// Answer first, run afterwards. Run: php -S localhost:8000, http://localhost:8000/quiz1.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: rozgrzewka, funkcja z lekcji 12</h2>";
function sumUpTo($upTo) {
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;
        $i++;
    }
    return $sum;
}
echo sumUpTo(3);            // 6, that is 1 + 2 + 3
// $sum lived only inside the function. Uncomment the line to see
// „Warning: Undefined variable $sum”, read it, then comment it back.
// echo $sum;

echo "<h2>2: egzamin, poprawna kolejność argumentów</h2>";
echo str_replace("kota", "mysz", "ala ma kota");   // ala ma mysz, this is answer D

echo "<h2>3: egzamin, ta sama funkcja z zamienioną kolejnością</h2>";
// Answer C from the same question: PHP looks for the whole sentence inside the word „mysz”,
// finds nothing, reports no error and returns the third argument unchanged.
echo str_replace("ala ma kota", "kota", "mysz");   // mysz
// Answers A and B use a function that does not exist in PHP. Uncomment to see
// „Fatal error: Uncaught Error: Call to undefined function replace()”, then comment it back.
// echo replace("kota", "mysz", "ala ma kota");

echo "<h2>4: egzamin, trzy funkcje na wielkość liter</h2>";
echo strtoupper("ala ma psa") . "<br>";   // ALA MA PSA, this is answer A
echo strtolower("ALA MA PSA") . "<br>";   // ala ma psa, the opposite direction
echo ucfirst("ala ma psa") . "<br>";      // Ala ma psa, only the first letter
// strstr() needs two arguments and looks for a fragment, it does not change letters.
// Uncomment to see „Fatal error: Uncaught ArgumentCountError”, then comment it back.
// echo strstr("ala ma psa");

echo "<h2>5: liczenie znaków</h2>";
echo strlen(" Ala ma kota ");   // 13, both edge spaces count

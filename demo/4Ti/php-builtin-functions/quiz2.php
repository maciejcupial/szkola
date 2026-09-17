<?php
// Lesson 14 (4Ti): „co wypisze?” from slajdy_2.html, table (slide 3) and the two exam
// questions (slide 7). Expected: 5, 4, 0, 1, -1, -5, int(5), float(4.5), string(1) "5",
// bool(false), string, and two lines with the current time that change on every run.
// Answer first, run afterwards. Run: php -S localhost:8000, http://localhost:8000/quiz2.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: próg w połowie drogi</h2>";
echo round(4.5) . "<br>";     // 5
echo round(4.49) . "<br>";    // 4

echo "<h2>2: egzamin, które wywołanie round() zwróci 1</h2>";
echo round(0.29) . "<br>";    // 0, below the half
echo round(0.60) . "<br>";    // 1, this is answer B
echo round(-1.40) . "<br>";   // -1, rounding works away from zero
echo round(-4.60) . "<br>";   // -5

echo "<h2>3: ta sama piątka, dwa różne typy</h2>";
var_dump(5);                  // int(5)
echo "<br>";
var_dump(4.5);                // float(4.5)
echo "<br>";
var_dump("5");                // string(1) "5", the quotes make it a text
echo "<br>";
var_dump(is_int("5"));        // bool(false)
echo "<br>";
echo gettype("5");            // string

echo "<h2>4: egzamin, godzina:minuta:sekunda</h2>";
// Both lines read the current moment, so their values differ on every run.
echo date("H:i:s") . "<br>";  // for example 15:38:20, this is answer A
// G is the hour without a leading zero and m is the month, not the minutes.
echo date("G:m:s") . "<br>";  // for example 15:06:20, the middle part is the month
// time() takes no format and no arguments at all. Uncomment to see
// „Fatal error: Uncaught ArgumentCountError”, then comment it back.
// echo time("H:i:s");

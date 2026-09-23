<?php
// Lesson 14, slides 3 and 7: "co wypisze?" quiz.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1: próg w połowie drogi</h2>";
echo round(4.5) . "<br>";     // 5
echo round(4.49) . "<br>";    // 4

echo "<h2>2: egzamin, które wywołanie round() zwróci 1</h2>";
echo round(0.29) . "<br>";    // 0
echo round(0.60) . "<br>";    // 1, odpowiedź B
echo round(-1.40) . "<br>";   // -1
echo round(-4.60) . "<br>";   // -5

echo "<h2>3: ta sama piątka, dwa różne typy</h2>";
var_dump(5);                  // int(5)
echo "<br>";
var_dump(4.5);                // float(4.5)
echo "<br>";
var_dump("5");                // string(1) "5"
echo "<br>";
var_dump(is_int("5"));        // bool(false)
echo "<br>";
echo gettype("5");            // string

echo "<h2>4: egzamin, godzina:minuta:sekunda</h2>";
echo date("H:i:s") . "<br>";  // e.g. 15:38:20, odpowiedź A
// m is the month, not the minutes.
echo date("G:m:s") . "<br>";  // e.g. 15:06:20
// Fatal error: Uncaught ArgumentCountError
// echo time("H:i:s");

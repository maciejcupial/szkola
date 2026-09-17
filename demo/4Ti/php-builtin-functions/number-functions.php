<?php
// Lesson 14 (4Ti): built-in functions 2/2, ready-made functions for numbers and types.
// Live-coding target for slides 3-6 of 26_php_funkcje_wbudowane/slajdy_2.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/number-functions.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: trzy funkcje na liczby i typy</h2>";
echo round(4.5) . "<br>";           // 5
echo round(4.49) . "<br>";          // 4
var_dump(5);                        // int(5)
echo "<br>";
echo date("d.m.Y") . "<br>";        // today's date, the value differs on every run

echo "<h2>Slajd 4: round() i próg w połowie drogi</h2>";
// Exactly one half goes up, anything below the half goes down. PHP rounds, it does not cut.
echo round(4.5) . "<br>";           // 5
echo round(4.49) . "<br>";          // 4
// The second argument sets the number of decimal places, 0 by default.
echo round(3.14159, 2) . "<br>";    // 3.14
// round() returns a float even when the result looks like a whole number.
var_dump(round(4.5));               // float(5)
echo "<br>";

echo "<h2>Slajd 5: var_dump() pokazuje typ obok wartości</h2>";
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";                 // quotes make it a text, not a number
var_dump($intValue);                // int(5)
echo "<br>";
var_dump($floatValue);              // float(4.5)
echo "<br>";
var_dump($stringValue);             // string(1) "5"
echo "<br>";
// echo shows the same thing for both fives, the difference is visible only in var_dump().
echo $intValue . " i " . $stringValue . "<br>";   // 5 i 5

echo "<h2>Slajd 6: date() i litery formatu</h2>";
// Every letter is a placeholder: d day, m month, Y year, H hour, i minutes.
// All three lines below print the current moment, so the values differ on every run.
echo date("d.m.Y") . "<br>";        // for example 15.06.2030
echo date("H:i") . "<br>";          // for example 15:38
echo date("d.m.Y H:i") . "<br>";    // the same letters, one format

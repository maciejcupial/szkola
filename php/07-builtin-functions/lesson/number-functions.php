<?php
// Lesson 14, slides 3-6: built-in functions for numbers and types.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: trzy funkcje na liczby i typy</h2>";
echo round(4.5) . "<br>";           // 5
echo round(4.49) . "<br>";          // 4
var_dump(5);                        // int(5)
echo "<br>";
echo date("d.m.Y") . "<br>";        // e.g. 15.06.2030

echo "<h2>Slajd 4: round() i próg w połowie drogi</h2>";
echo round(4.5) . "<br>";           // 5
echo round(4.49) . "<br>";          // 4
echo round(3.14159, 2) . "<br>";    // 3.14
var_dump(round(4.5));               // float(5)
echo "<br>";

echo "<h2>Slajd 5: var_dump() pokazuje typ obok wartości</h2>";
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";
var_dump($intValue);                // int(5)
echo "<br>";
var_dump($floatValue);              // float(4.5)
echo "<br>";
var_dump($stringValue);             // string(1) "5"
echo "<br>";
echo $intValue . " i " . $stringValue . "<br>";   // 5 i 5

echo "<h2>Slajd 6: date() i litery formatu</h2>";
// d day, m month, Y year, H hour, i minutes
echo date("d.m.Y") . "<br>";        // e.g. 15.06.2030
echo date("H:i") . "<br>";          // e.g. 15:38
echo date("d.m.Y H:i") . "<br>";    // e.g. 15.06.2030 15:38

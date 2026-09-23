<?php
// Lesson 14, slide 8: model solution of exercise 1.
header("Content-Type: text/html; charset=UTF-8");

// Step 2
$a = round(4.5);
$b = round(4.49);
echo "round(4.5) = " . $a . "<br>";      // round(4.5) = 5
echo "round(4.49) = " . $b . "<br>";     // round(4.49) = 4

// Step 3
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";
var_dump($intValue);        // int(5)
echo "<br>";
var_dump($floatValue);      // float(4.5)
echo "<br>";
var_dump($stringValue);     // string(1) "5"
echo "<br>";

// Step 4
echo date("d.m.Y") . "<br>";   // e.g. 15.06.2030

// Dla szybkich:
var_dump(is_int($stringValue));   // bool(false)
echo "<br>";
echo gettype($stringValue);       // string

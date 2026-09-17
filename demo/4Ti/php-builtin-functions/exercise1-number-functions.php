<?php
// Lesson 14 (4Ti): model solution of exercise 1 (slide 8 of slajdy_2.html).
// Students save it in their own folder under the name number-functions.php.
// Expected: 5, then 4, then int(5), float(4.5), string(1) "5", then today's date as DD.MM.RRRR.
// Run: php -S localhost:8000 in this folder, http://localhost:8000/exercise1-number-functions.php
header("Content-Type: text/html; charset=UTF-8");

// Step 2: the same function, two different arguments.
$a = round(4.5);
$b = round(4.49);
echo "round(4.5) = " . $a . "<br>";      // round(4.5) = 5
echo "round(4.49) = " . $b . "<br>";     // round(4.49) = 4

// Step 3: three variables, three types. The quotes around the last five matter.
$intValue = 5;
$floatValue = 4.5;
$stringValue = "5";
var_dump($intValue);        // int(5)
echo "<br>";
var_dump($floatValue);      // float(4.5)
echo "<br>";
var_dump($stringValue);     // string(1) "5"
echo "<br>";

// Step 4: date() reads the current moment, so this line prints something else every run.
echo date("d.m.Y") . "<br>";   // today's date, for example 15.06.2030

// For fast students: the bonus from slide 8.
var_dump(is_int($stringValue));   // bool(false), „5” in quotes is a text, not a whole number
echo "<br>";
echo gettype($stringValue);       // string

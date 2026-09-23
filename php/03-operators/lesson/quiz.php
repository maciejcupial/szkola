<?php
// Lesson 5 (4Ti): exercise 2 "co wypisze?", slide 11.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1</h2>";
echo 17 % 5;                       // 2
echo "<h2>2</h2>";
echo 2 + 3 * 4;                    // 14
echo "<h2>3</h2>";
echo "Wynik: " . 2 + 3;            // Wynik: 5
echo "<h2>4</h2>";
var_dump("5" === 5);               // bool(false)
echo "<h2>5</h2>";
$i = 5;
$i++;
$i += 10;
echo $i;                           // 16

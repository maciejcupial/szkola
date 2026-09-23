<?php
// Lesson 4 (4Ti): exercise 2 "co wypisze?", slide 11.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>A</h2>";
$colors = ["czerwony", "zielony", "niebieski"];
echo $colors[1];                                   // zielony

echo "<h2>B</h2>";
$numbers = [10, 20, 30];
$numbers[] = 40;
echo count($numbers);                              // 4

echo "<h2>C</h2>";
$prices = ["bread" => 5, "butter" => 9];
echo $prices["bread"] + $prices["butter"];         // 14

echo "<h2>D</h2>";
$days = ["pn", "wt", "sr"];
echo $days[3];                                     // Warning: Undefined array key 3

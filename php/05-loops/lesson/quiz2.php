<?php
// Lesson 9, slide 10: "co wypisze?"
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>A</h2>";
foreach ([3, 5, 7] as $n) {
    echo $n * 2 . " ";              // 6 10 14
}

echo "<h2>B</h2>";
$prices = ["bread" => 5, "milk" => 4];
foreach ($prices as $product => $price) {
    echo "$product: $price; ";      // bread: 5; milk: 4;
}

echo "<h2>C</h2>";
$grades = [4, 5, 3];
echo array_sum($grades) / count($grades);   // 4

echo "<h2>D</h2>";
$names = ["Ola", "Jan", "Adam"];
sort($names);
echo $names[0];                     // Adam

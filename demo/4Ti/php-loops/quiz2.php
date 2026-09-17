<?php
// Lesson 9 (4Ti): exercise 2 "co wypisze?" (slide 10).
// Expected: 6 10 14, bread: 5; milk: 4;, 4, Adam.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/quiz2.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>A</h2>";
foreach ([3, 5, 7] as $n) {
    echo $n * 2 . " ";              // 6 10 14, foreach also works on an array written in place
}

echo "<h2>B</h2>";
$prices = ["bread" => 5, "milk" => 4];
foreach ($prices as $product => $price) {
    echo "$product: $price; ";      // bread: 5; milk: 4;
}

echo "<h2>C</h2>";
$grades = [4, 5, 3];
echo array_sum($grades) / count($grades);   // 4, that is 12 / 3

echo "<h2>D</h2>";
$names = ["Ola", "Jan", "Adam"];
sort($names);                       // sorts in place: Adam, Jan, Ola
echo $names[0];                     // Adam, index 0 is no longer "Ola"

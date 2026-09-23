<?php
// Lesson 8, slide 10: "ile razy wykona się pętla?"
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>A</h2>";
$count = 0;
for ($i = 0; $i < 10; $i++) {
    $count++;
}
echo $count;                        // 10

echo "<h2>B</h2>";
$count = 0;
for ($i = 1; $i <= 10; $i += 2) {
    $count++;
}
echo $count;                        // 5

echo "<h2>C</h2>";
$count = 0;
$i = 10;
while ($i > 0) {
    $i -= 3;
    $count++;
}
echo $count;                        // 4

echo "<h2>D</h2>";
$count = 0;
$i = 5;
do {
    $i++;
    $count++;
} while ($i < 5);
echo $count;                        // 1

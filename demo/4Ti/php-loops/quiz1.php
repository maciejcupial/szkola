<?php
// Lesson 8 (4Ti): exercise 2 "ile razy wykona się pętla?" (slide 10). Expected: 10, 5, 4, 1.
// The bodies of the slide are empty; here each one only counts the passes.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/quiz1.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>A</h2>";
$count = 0;
for ($i = 0; $i < 10; $i++) {
    $count++;
}
echo $count;                        // 10, the counter starts at 0 and stops at 9

echo "<h2>B</h2>";
$count = 0;
for ($i = 1; $i <= 10; $i += 2) {
    $count++;
}
echo $count;                        // 5, the steps are 1, 3, 5, 7, 9, then 11 > 10

echo "<h2>C</h2>";
$count = 0;
$i = 10;
while ($i > 0) {
    $i -= 3;
    $count++;
}
echo $count;                        // 4, the values are 10, 7, 4, 1, then -2 ends it

echo "<h2>D</h2>";
$count = 0;
$i = 5;
do {
    $i++;
    $count++;
} while ($i < 5);
echo $count;                        // 1, do ... while runs the body before it checks the condition

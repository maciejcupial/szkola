<?php
// Lesson 7 (4Ti): exercise 2 "co wypisze?" (slide 11). Expected: CD, dwa, inne, dużo, 0.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1</h2>";
$k = 3;
switch ($k) {
    case 3: echo "C";                 // no break: falls through
    case 4: echo "D"; break;          // CD
    case 5: echo "E";
}

echo "<h2>2</h2>";
$m = "2";
switch ($m) {
    case 2: echo "dwa"; break;        // dwa, switch compares loosely (==)
    default: echo "inne";
}

echo "<h2>3</h2>";
echo match ("2") {
    2       => "dwa",
    default => "inne",                // inne, match compares strictly (===)
};

echo "<h2>4</h2>";
$t = 15;
echo $t > 10 ? "dużo" : "mało";      // dużo

echo "<h2>5</h2>";
$data = [];
echo $data["id"] ?? 0;               // 0, no warning thanks to ??

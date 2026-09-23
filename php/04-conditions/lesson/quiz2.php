<?php
// Lesson 7, slide 11: "co wypisze?"
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1</h2>";
$k = 3;
switch ($k) {
    case 3: echo "C";                 // no break
    case 4: echo "D"; break;          // CD
    case 5: echo "E";
}

echo "<h2>2</h2>";
$m = "2";
switch ($m) {
    case 2: echo "dwa"; break;        // dwa (==)
    default: echo "inne";
}

echo "<h2>3</h2>";
echo match ("2") {
    2       => "dwa",
    default => "inne",                // inne (===)
};

echo "<h2>4</h2>";
$t = 15;
echo $t > 10 ? "dużo" : "mało";      // dużo

echo "<h2>5</h2>";
$data = [];
echo $data["id"] ?? 0;               // 0

<?php
// for, while, break and continue. Lesson 8, slides 3-7.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: 100 wierszy tabeli bez kopiowania</h2>";
echo "<tr><td>1</td></tr>";
echo "<tr><td>2</td></tr>";
echo "<tr><td>3</td></tr>";
// ... 97 more lines like these ...
echo "<tr><td>100</td></tr>";
echo "<br>";
// No <table> yet, so the browser shows bare numbers.
for ($i = 1; $i <= 100; $i++) {
    echo "<tr><td>$i</td></tr>";
}

echo "<h2>Slajd 4: for, start, warunek, krok</h2>";
for ($lap = 1; $lap <= 5; $lap++) {
    echo "Okrążenie $lap<br>";      // Okrążenie 1 ... Okrążenie 5
}
// Live: < 5 gives 4 laps.

echo "<h2>Slajd 5: while, dopóki warunek jest prawdziwy</h2>";
$thickness = 1;
while ($thickness < 4) {
    echo "Mieszam, gęstość: $thickness<br>";   // 1, 2, 3
    $thickness++;                              // without it the loop never ends
}
$i = 0;
do {
    echo $i;                        // 0
} while ($i > 0);
echo "<br>";

echo "<h2>Slajd 6: pętla nieskończona, break i continue</h2>";
$power = 1;
while (true) {
    $power *= 2;
    if ($power > 100) {
        break;
    }
}
echo $power;                        // 128
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . " ";
}
echo "<br>";                        // 1 3 5 7 9

echo "<h2>Slajd 7: pętla w pętli, tabliczka mnożenia</h2>";
echo "<table>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . $row * $col . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

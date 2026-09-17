<?php
// Lesson 8 (4Ti): for, while, break and continue.
// Live-coding target for slides 3-7 of 20_php_petle/slajdy_1.html.
// Type the blocks in this order on the projector; each block prints exactly what the slide promises.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/loops.php
// The infinite loop from slide 6 has its own file: infinite-loop.php.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: 100 wierszy tabeli bez kopiowania</h2>";
// One echo per row: changing the row colour later would mean a hundred edits.
echo "<tr><td>1</td></tr>";
echo "<tr><td>2</td></tr>";
echo "<tr><td>3</td></tr>";
// ... 97 more lines like these ...
echo "<tr><td>100</td></tr>";
echo "<br>";
// The same result in three lines. There is no <table> around it yet, so the browser shows bare
// numbers; slide 7 adds the table tags.
for ($i = 1; $i <= 100; $i++) {
    echo "<tr><td>$i</td></tr>";
}

echo "<h2>Slajd 4: for, start, warunek, krok</h2>";
// Header of for: start runs once, the condition is checked before every pass, the step after it.
for ($lap = 1; $lap <= 5; $lap++) {
    echo "Okrążenie $lap<br>";      // Okrążenie 1 ... Okrążenie 5
}
// Live: change <= 5 to < 5 and ask the class how many laps run now. Answer: 4.

echo "<h2>Slajd 5: while, dopóki warunek jest prawdziwy</h2>";
$thickness = 1;
while ($thickness < 4) {
    echo "Mieszam, gęstość: $thickness<br>";   // gęstość 1, potem 2, potem 3
    $thickness++;                              // delete this line live and the loop never ends
}
// do ... while checks the condition at the end, so the body always runs at least once.
$i = 0;
do {
    echo $i;                        // 0, even though the condition is false from the start
} while ($i > 0);
echo "<br>";

echo "<h2>Slajd 6: pętla nieskończona, break i continue</h2>";
$power = 1;
while (true) {                      // always true, only break gets us out
    $power *= 2;
    if ($power > 100) {
        break;                      // leave the whole loop
    }
}
echo $power;                        // 128, the first power of two greater than 100
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;                   // skip the rest of this pass, the loop goes on
    }
    echo $i . " ";
}
echo "<br>";                        // 1 3 5 7 9
// A loop with no break and no change of the counter runs forever: see infinite-loop.php.

echo "<h2>Slajd 7: pętla w pętli, tabliczka mnożenia</h2>";
// The outer loop makes a row, the inner one fills it with cells: 10 rows times 10 cells is 100 cells.
echo "<table>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . $row * $col . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

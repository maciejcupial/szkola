<?php
// Lesson 9 (4Ti): foreach over plain, associative and nested arrays, plus four array helpers.
// Live-coding target for slides 3-6 of 20_php_petle/slajdy_2.html, with the copy of the value
// demo from slide 7 at the end.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/foreach.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: foreach, dla każdej szuflady</h2>";
// Read it as "for every element of $games, called $game, do ...". No counter, no count().
$games = ["Minecraft", "Fortnite", "FIFA"];
echo "<ul>";
foreach ($games as $game) {
    echo "<li>$game</li>";      // Minecraft, Fortnite, FIFA
}
echo "</ul>";

echo "<h2>Slajd 4: tablica asocjacyjna, \$key => \$value</h2>";
// Two variables per pass: the label of the drawer (key) and what is inside (value).
$student = [
    "name" => "Anna",
    "age"  => 18,
    "city" => "Warszawa",
];
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
// name: Anna
// age: 18
// city: Warszawa
// In a plain array the key is the position, counted from 0, so $index + 1 numbers the list from 1.
foreach ($games as $index => $game) {
    echo ($index + 1) . ". $game<br>";
}
// 1. Minecraft
// 2. Fortnite
// 3. FIFA

echo "<h2>Slajd 5: tablica tablic, wiersze i komórki</h2>";
// Same shape as the multiplication table: outer loop makes a row, inner one fills it.
// The difference: here the array decides how many passes there are, not a counter.
$students = [
    ["name" => "Anna",   "grades" => [5, 4, 5, 6]],
    ["name" => "Bartek", "grades" => [3, 2, 3]],
];
echo "<table>";
foreach ($students as $student) {              // one row per student
    echo "<tr><td>" . $student["name"] . "</td><td>";
    foreach ($student["grades"] as $grade) {   // one grade after another
        echo $grade . " ";
    }
    echo "</td></tr>";
}
echo "</table>";
// Anna   | 5 4 5 6
// Bartek | 3 2 3

echo "<h2>Slajd 6: czterech pomocników</h2>";
$grades = [4, 5, 3, 5];
echo array_sum($grades) . "<br>";                                  // 17
echo count($grades) . "<br>";                                      // 4
echo array_sum($grades) / count($grades) . "<br>";                 // 4.25
echo round(array_sum($grades) / count($grades), 2) . "<br>";       // 4.25, rounded to two places
var_export(in_array(6, $grades));                                  // false, echo prints nothing for false
echo "<br>";
sort($grades);                                                     // sorts in place, the array changes
echo "<pre>";
print_r($grades);                                                  // 3, 4, 5, 5
echo "</pre>";
// sort on an associative array throws the labels away and numbers the values from 0.
$prices = ["bread" => 5, "milk" => 4];
sort($prices);
echo "<pre>";
print_r($prices);                                                  // [0] => 4, [1] => 5, keys are gone
echo "</pre>";

echo "<h2>Slajd 7: \$game to kopia wartości</h2>";
// Assigning to the loop variable changes only the copy, the array stays as it was.
// Changing the array means going through the key: $games[$index] = "X";
foreach ($games as $game) {
    $game = "X";
}
echo "<pre>";
print_r($games);                    // Minecraft, Fortnite, FIFA, unchanged
echo "</pre>";

<?php
// foreach and array helpers. Lesson 9, slides 3-7.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: foreach, dla każdej szuflady</h2>";
$games = ["Minecraft", "Fortnite", "FIFA"];
echo "<ul>";
foreach ($games as $game) {
    echo "<li>$game</li>";      // Minecraft, Fortnite, FIFA
}
echo "</ul>";

echo "<h2>Slajd 4: tablica asocjacyjna, \$key => \$value</h2>";
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
foreach ($games as $index => $game) {
    echo ($index + 1) . ". $game<br>";
}
// 1. Minecraft
// 2. Fortnite
// 3. FIFA

echo "<h2>Slajd 5: tablica tablic, wiersze i komórki</h2>";
$students = [
    ["name" => "Anna",   "grades" => [5, 4, 5, 6]],
    ["name" => "Bartek", "grades" => [3, 2, 3]],
];
echo "<table>";
foreach ($students as $student) {
    echo "<tr><td>" . $student["name"] . "</td><td>";
    foreach ($student["grades"] as $grade) {
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
echo round(array_sum($grades) / count($grades), 2) . "<br>";       // 4.25
var_export(in_array(6, $grades));                                  // false (echo prints nothing)
echo "<br>";
sort($grades);                                                     // changes the array itself
echo "<pre>";
print_r($grades);                                                  // 3, 4, 5, 5
echo "</pre>";
// sort drops the keys of an associative array.
$prices = ["bread" => 5, "milk" => 4];
sort($prices);
echo "<pre>";
print_r($prices);                                                  // [0] => 4, [1] => 5
echo "</pre>";

echo "<h2>Slajd 7: \$game to kopia wartości</h2>";
// $game is a copy; to change the array use $games[$index] = "X";
foreach ($games as $game) {
    $game = "X";
}
echo "<pre>";
print_r($games);                    // Minecraft, Fortnite, FIFA
echo "</pre>";

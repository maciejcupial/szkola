<?php
// Lesson 4 (4Ti): arrays, slides 4-8.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: tablica zwykła</h2>";
$games = ["Minecraft", "Fortnite", "FIFA", "Rocket League", "Among Us"];
echo $games[0] . "<br>";      // Minecraft
echo $games[4] . "<br>";      // Among Us
$games[] = "Tetris";          // index 5
echo count($games) . "<br>";  // 6

echo "<h2>Slajd 5: tablica asocjacyjna</h2>";
$student = [
    "name" => "Anna",
    "age"  => 18,
    "city" => "Warszawa",
];
echo $student["name"] . "<br>";  // Anna
echo $student["age"] . "<br>";   // 18

echo "<h2>Slajd 6: print_r i foreach</h2>";
echo "<pre>";
print_r($student);
echo "</pre>";
echo "<ol>";
foreach ($games as $game) {
    echo "<li>$game</li>";
}
echo "</ol>";
echo "<ul>";
foreach ($student as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";

echo "<h2>Slajd 7: tablica w tablicy</h2>";
$students = [
    ["name" => "Anna",   "grade" => 5],
    ["name" => "Bartek", "grade" => 4],
];
echo $students[0]["name"] . "<br>";   // Anna
echo $students[1]["grade"] . "<br>";  // 4

echo "<h2>Slajd 8: typowe błędy (odkomentuj na żywo, po jednej linii)</h2>";
// Warning: Undefined array key "email"
// echo $student["email"];
// Fatal error: Undefined constant "name" (keep last)
// echo $student[name];
echo "Koniec pliku.";

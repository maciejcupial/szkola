<?php
// Lesson 4 (4Ti): arrays. Live-coding target for slides 4-8 of 17_php_tablice/slajdy.html.
// Type the blocks in this order on the projector; each block prints exactly what the slide promises.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/arrays.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 4: tablica zwykła</h2>";
$games = ["Minecraft", "Fortnite", "FIFA", "Rocket League", "Among Us"];
echo $games[0] . "<br>";      // Minecraft, the first element has index 0
echo $games[4] . "<br>";      // Among Us, the last of five
$games[] = "Tetris";          // append at the end, it gets index 5
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
// print_r shows the whole array; view the page source (Ctrl+U) to see the indentation.
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
// Missing key: PHP prints "Warning: Undefined array key "email"" and the value is null (empty).
// echo $student["email"];
// Key without quotes: PHP looks for a constant named name and stops with
// "Fatal error: Uncaught Error: Undefined constant "name"". Put this line LAST, nothing runs after it.
// echo $student[name];
echo "Koniec pliku.";

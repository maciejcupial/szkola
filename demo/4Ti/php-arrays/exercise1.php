<?php
// Lesson 4 (4Ti): model solution of exercise 1 (slide 10), the file students name arrays.php.
// Expected output: "Moje gry: 6", a numbered list 1-6, then a bulleted list "godzina: czynność".
header("Content-Type: text/html; charset=UTF-8");

$games = ["Minecraft", "Fortnite", "FIFA", "Rocket League", "Among Us"];
$games[] = "Tetris";

echo "<p>Moje gry: " . count($games) . "</p>";
echo "<ol>";
foreach ($games as $game) {
    echo "<li>$game</li>";
}
echo "</ol>";

$dayPlan = [
    "7:00"  => "pobudka",
    "8:00"  => "szkoła",
    "15:00" => "obiad",
    "17:00" => "trening",
    "21:00" => "PHP",
];
echo "<ul>";
foreach ($dayPlan as $hour => $activity) {
    echo "<li>$hour: $activity</li>";
}
echo "</ul>";

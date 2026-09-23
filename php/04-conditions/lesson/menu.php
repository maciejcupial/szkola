<?php
// Lesson 7, slide 10: exercise 1 solution.
// Try: ?day=wt, ?day=nd, ?day=xyz, no ?day
header("Content-Type: text/html; charset=UTF-8");

$day = $_GET["day"] ?? "brak";
switch ($day) {
    case "pn":  echo "Siłownia."; break;
    case "wt":  echo "Nauka PHP."; break;
    case "sr":  echo "Basen."; break;
    case "czw": echo "Kino."; break;
    case "pt":  echo "Znajomi."; break;
    case "sb":
    case "nd":  echo "Weekend"; break;
    case "brak": echo "Dodaj do adresu ?day=pn"; break;
    default:    echo "Nie znam takiego dnia.";   // never echo $day without htmlspecialchars()
}

echo "<br>";

// For fast students: the same with match.
echo match ($day) {
    "pn" => "Siłownia.",
    "wt" => "Nauka PHP.",
    "sr" => "Basen.",
    "czw" => "Kino.",
    "pt" => "Znajomi.",
    "sb", "nd" => "Weekend",
    "brak" => "Dodaj do adresu ?day=pn",
    default => "Nie znam takiego dnia.",
};

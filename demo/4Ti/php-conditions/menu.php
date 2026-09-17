<?php
// Lesson 7 (4Ti): model solution of exercise 1 (slide 10), the file students name menu.php.
// Try: menu.php?day=wt, menu.php?day=nd, menu.php, menu.php?day=xyz
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
    default:    echo "Nie znam takiego dnia.";   // never echo $day here without htmlspecialchars()
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

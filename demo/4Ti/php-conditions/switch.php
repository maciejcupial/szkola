<?php
// Lesson 7 (4Ti, substitution hour in room 05): switch, match, ?: and ??.
// Live-coding target for slides 3-8 of 19_php_warunki/slajdy_2.html. match needs PHP 8.0 or newer.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/switch.php
// For slide 8 open http://localhost:8000/switch.php?name=Ola and then without ?name=.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: switch</h2>";
$day = "wt";                        // change to "pn" and "xyz" live
switch ($day) {
    case "pn":
        echo "Siłownia<br>";
        break;
    case "wt":
        echo "Nauka PHP<br>";       // this one
        break;
    default:
        echo "Wolne<br>";
}

echo "<h2>Slajd 4: to samo jako elseif, dwa case pod sobą</h2>";
if ($day === "pn") {
    echo "Siłownia<br>";
} elseif ($day === "wt") {
    echo "Nauka PHP<br>";
} else {
    echo "Wolne<br>";
}
$day = "nd";
switch ($day) {
    case "sb":
    case "nd":                      // two labels, one block
        echo "Weekend<br>";
        break;
    default:
        echo "Dzień roboczy<br>";
}
// switch compares loosely, like ==: case 1 also catches the text "1".
$number = "1";
switch ($number) {
    case 1:
        echo "case 1 złapał tekst \"1\" (luźne porównanie)<br>";
        break;
}

echo "<h2>Slajd 5: bez break domino leci dalej</h2>";
$n = 2;
switch ($n) {
    case 1: echo "jeden ";
    case 2: echo "dwa ";            // starts here and falls through to the end
    case 3: echo "trzy ";
    default: echo "inne";
}
echo "<br>";                        // dwa trzy inne

echo "<h2>Slajd 6: match</h2>";
$code = 404;
$message = match ($code) {
    200, 201 => "OK",
    404      => "Nie znaleziono",
    default  => "Inny kod",
};
echo $message . "<br>";             // Nie znaleziono
echo match ("1") {
    1       => "liczba 1",
    default => "coś innego",        // match compares strictly, like ===
};
echo "<br>";
// Without default and without a hit PHP stops with UnhandledMatchError. Uncomment live, read, comment back.
// echo match (5) { 1 => "jeden" };

echo "<h2>Slajd 7: operator ? :</h2>";
$age = 20;
if ($age >= 18) {
    $label = "dorosły";
} else {
    $label = "niepełnoletni";
}
echo $label . "<br>";
$label = $age >= 18 ? "dorosły" : "niepełnoletni";   // the same in one line
echo $label . "<br>";
// Nested ?: without brackets is a syntax error since PHP 8. Uncomment live to show the message.
// echo $age >= 18 ? "dorosły" : $age >= 13 ? "nastolatek" : "dziecko";

echo "<h2>Slajd 8: ?? jako koło zapasowe</h2>";
// $_GET holds the values after ? in the address: switch.php?name=Ola gives $_GET["name"] = "Ola".
$name = $_GET["name"] ?? "gość";    // the right side is used when the key is missing
echo "Cześć, " . htmlspecialchars($name);   // htmlspecialchars: text from the address stays text

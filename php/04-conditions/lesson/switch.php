<?php
// switch, match, ?: and ??. Lesson 7, slides 3-8.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: switch</h2>";
$day = "wt";                        // live: "pn", "xyz"
switch ($day) {
    case "pn":
        echo "Siłownia<br>";
        break;
    case "wt":
        echo "Nauka PHP<br>";       // Nauka PHP
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
    case "nd":
        echo "Weekend<br>";
        break;
    default:
        echo "Dzień roboczy<br>";
}
// switch compares loosely (==).
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
    case 2: echo "dwa ";
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
    default => "coś innego",        // coś innego (===)
};
echo "<br>";
// UnhandledMatchError
// echo match (5) { 1 => "jeden" };

echo "<h2>Slajd 7: operator ? :</h2>";
$age = 20;
if ($age >= 18) {
    $label = "dorosły";
} else {
    $label = "niepełnoletni";
}
echo $label . "<br>";
$label = $age >= 18 ? "dorosły" : "niepełnoletni";
echo $label . "<br>";
// Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported
// echo $age >= 18 ? "dorosły" : $age >= 13 ? "nastolatek" : "dziecko";

echo "<h2>Slajd 8: ?? jako koło zapasowe</h2>";
// Try switch.php?name=Ola
$name = $_GET["name"] ?? "gość";
echo "Cześć, " . htmlspecialchars($name);

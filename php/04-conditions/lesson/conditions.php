<?php
// if, else, elseif. Lesson 6, slides 3-8.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: if</h2>";
$age = 20;                       // live: 16
if ($age >= 18) {
    echo "Wchodzisz na mecz.<br>";
}
echo "Koniec.<br>";

echo "<h2>Slajd 4: if ... else</h2>";
$age = 16;
if ($age >= 18) {
    echo "Wchodzisz na mecz.<br>";
} else {
    echo "Tylko z opiekunem.<br>";
}
// Without braces only the first line belongs to the if.
if ($age >= 18)
    echo "Bez klamer: tylko ta linia należy do if.<br>";
    echo "Bez klamer: ta linia wykona się zawsze.<br>";

echo "<h2>Slajd 5: drabinka elseif</h2>";
$temp = 25;
if ($temp > 30) {
    echo "gorąco<br>";
} elseif ($temp > 20) {
    echo "ciepło<br>";           // ciepło
} elseif ($temp > 10) {
    echo "chłodno<br>";
} else {
    echo "zimno<br>";
}
// Reversed ladder: every value above 10 lands in the first branch.
if ($temp > 10) {
    echo "odwrócona drabinka: chłodno (źle!)<br>";
} elseif ($temp > 20) {
    echo "odwrócona drabinka: ciepło<br>";
}

echo "<h2>Slajd 6: warunki złożone i if w if</h2>";
$age = 20;
$hasTicket = true;
$isStaff = false;
if ($age >= 18 && $hasTicket) {
    echo "Wchodzisz.<br>";
}
if ($hasTicket || $isStaff) {
    echo "Brama otwarta.<br>";
}
if (!$hasTicket) {
    echo "Kasa jest obok.<br>";
}
if ($age >= 18) {
    if ($hasTicket) {
        echo "Wchodzisz.<br>";
    } else {
        echo "Kup bilet.<br>";
    }
} else {
    echo "Tylko z opiekunem.<br>";
}

echo "<h2>Slajd 7: pułapka = zamiast ==</h2>";
$isOpen = false;
if ($isOpen = true) {            // = assigns, always true
    echo "Sklep otwarty (zawsze, choć \$isOpen było false)<br>";
}

echo "<h2>Slajd 8: co PHP uważa za fałsz</h2>";
$name = "0";
if ($name) {
    echo "Cześć, " . $name . "<br>";
} else {
    echo "Brak imienia<br>";     // "0" is false
}
var_dump((bool) "0");            // bool(false)
echo "<br>";
var_dump((bool) "0.0");          // bool(true)
echo "<br>";
if ($name !== "") {
    echo "Cześć, " . $name . " (porównanie wprost)<br>";
}

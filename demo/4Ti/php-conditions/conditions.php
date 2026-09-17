<?php
// Lesson 6 (4Ti): if, else, elseif. Live-coding target for slides 3-8 of 19_php_warunki/slajdy_1.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/conditions.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: if</h2>";
$age = 20;                       // change to 16 live: the block is skipped, "Koniec." still prints
if ($age >= 18) {
    echo "Wchodzisz na mecz.<br>";
}
echo "Koniec.<br>";              // runs always, it is outside the block

echo "<h2>Slajd 4: if ... else</h2>";
$age = 16;
if ($age >= 18) {
    echo "Wchodzisz na mecz.<br>";
} else {
    echo "Tylko z opiekunem.<br>";   // exactly one of the two blocks runs
}
// Braces always: without them only the FIRST line belongs to the if, the second runs every time.
if ($age >= 18)
    echo "Bez klamer: tylko ta linia należy do if.<br>";
    echo "Bez klamer: ta linia wykona się zawsze.<br>";

echo "<h2>Slajd 5: drabinka elseif</h2>";
$temp = 25;
if ($temp > 30) {
    echo "gorąco<br>";
} elseif ($temp > 20) {
    echo "ciepło<br>";           // this one
} elseif ($temp > 10) {
    echo "chłodno<br>";
} else {
    echo "zimno<br>";
}
// Reversed ladder (start from > 10): every temperature above 10 lands in the first branch.
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
// The same as && written as two steps, with 4-space indentation per level.
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
if ($isOpen = true) {            // a single = assigns true and the condition is always true
    echo "Sklep otwarty (zawsze, choć \$isOpen było false)<br>";
}

echo "<h2>Slajd 8: co PHP uważa za fałsz</h2>";
$name = "0";
if ($name) {
    echo "Cześć, " . $name . "<br>";
} else {
    echo "Brak imienia<br>";     // "0" counts as false
}
var_dump((bool) "0");            // bool(false)
echo "<br>";
var_dump((bool) "0.0");          // bool(true): only "" and "0" are false among strings
echo "<br>";
// Compare explicitly instead: $name !== ""
if ($name !== "") {
    echo "Cześć, " . $name . " (porównanie wprost)<br>";
}

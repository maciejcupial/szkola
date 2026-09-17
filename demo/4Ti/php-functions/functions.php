<?php
// Lessons 10-12 (4Ti, Strony i aplikacje internetowe): own functions, one file grown over three lessons.
// Live-coding target for slides 3-7 of 25_php_funkcje_wlasne/slajdy_1.html, slides 3-7 of slajdy_2.html
// and slides 4-6 of slajdy_3.html. The teacher adds one lesson part per hour, the older parts stay.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/functions.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 10, slajd 3: bez funkcji, ten sam wzór 3 razy</h2>";
$side1 = 3;
$area1 = $side1 * $side1;
echo $area1 . "<br>";   // 9

$side2 = 5;
$area2 = $side2 * $side2;
echo $area2 . "<br>";   // 25

$side3 = 10;
$area3 = $side3 * $side3;
echo $area3 . "<br>";   // 100
// One formula written three times: a fix to the formula means three fixes. That is what a function solves.

echo "<h2>Lekcja 10, slajd 4: funkcja jako maszynka</h2>";
// function, a name in camelCase, the parameter list in brackets, the body in braces.
// Input goes in through the parameter, the result goes out through return.
function squareArea($side) {
    $area = $side * $side;
    return $area;
}
echo squareArea(5) . "<br>";   // 25

echo "<h2>Lekcja 10, slajd 5: definicja raz, wywołanie wiele razy</h2>";
// The slide shortens the body to one line, return $side * $side, which is the same function.
// A function can be defined only once per file, so here the definition above is reused.
echo squareArea(3) . "<br>";    // 9
echo squareArea(5) . "<br>";    // 25
echo squareArea(10) . "<br>";   // 100

echo "<h2>Lekcja 10, slajd 6: return, skok i powrót z wynikiem</h2>";
// The call jumps into the body, return sends the value back and the program goes on from the call.
// Code placed after return inside the body never runs.
echo squareArea(4) . "<br>";   // 16

echo "<h2>Lekcja 10, slajd 7: trzy typowe błędy</h2>";
// Error 1: echo instead of return. Uncomment the three lines, the page shows 16 and then NULL,
// because a function without return gives null. Comment them back afterwards.
// function squareAreaEcho($side) { echo $side * $side; }
// $result = squareAreaEcho(4);
// var_dump($result);

// Error 2: a call without the argument. Uncomment to get
// Fatal error: Uncaught ArgumentCountError: Too few arguments to function squareArea(),
// 0 passed ... and exactly 1 expected. The page stops there, so comment it back.
// echo squareArea();

// Error 3: a function name starting with a digit. Uncomment to get
// Parse error: syntax error, unexpected integer "2". A parse error blanks the whole page,
// not only this line, so comment it back at once.
// function 2pole($side) { return $side * $side; }
echo "Wszystkie trzy błędy są zakomentowane, strona działa.<br>";

echo "<h2>Lekcja 11, slajd 3: parametr wymagany i parametr domyślny</h2>";
// $name has no default value, so it is required. $language has one, so it may be skipped.
// A parameter with a default value stands at the end of the list, otherwise it cannot be skipped.
function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    return "Cześć, $name!";
}
echo "Sygnatura: greetUser(\$name, \$language = \"pl\")<br>";

echo "<h2>Lekcja 11, slajd 4: które wywołanie jest poprawne</h2>";
echo greetUser("Ala") . "<br>";         // Cześć, Ala!, $language takes the default „pl”
echo greetUser("Ala", "en") . "<br>";   // Hello, Ala!, the given value wins over the default
// The third call from the slide is wrong. Uncomment to get
// Fatal error: Uncaught ArgumentCountError: Too few arguments to function greetUser(),
// 0 passed ... and at least 1 expected. Comment it back after the class has read it.
// echo greetUser();

echo "<h2>Lekcja 11, slajd 5: kod na żywo, greetUser()</h2>";
echo greetUser("Ala") . "<br>";         // Cześć, Ala!
echo greetUser("Ala", "en") . "<br>";   // Hello, Ala!

echo "<h2>Lekcja 11, slajd 6: tabela wywołań i wyników</h2>";
echo "greetUser(\"Ala\"), 1 argument, \$language = \"pl\": " . greetUser("Ala") . "<br>";
echo "greetUser(\"Ala\", \"en\"), 2 argumenty, \$language = \"en\": " . greetUser("Ala", "en") . "<br>";
echo "greetUser(), 0 argumentów: ArgumentCountError<br>";

echo "<h2>Lekcja 11, slajd 7: do funkcji trafia kopia, nie oryginał</h2>";
function shout($word) {
    $word = strtoupper($word);
    return $word;
}
$text = "cisza";
echo shout($text) . "<br>";   // CISZA
echo $text . "<br>";          // cisza, the variable outside kept its value

echo "<h2>Lekcja 12, slajd 4: pętla while z akumulatorem</h2>";
// $sum is the accumulator: it collects the result step by step, once per turn of the loop.
// $sum and $i live only while the function runs.
function sumUpTo($upTo) {
    $sum = 0;
    $i = 1;
    while ($i <= $upTo) {
        $sum += $i;
        $i++;
    }
    return $sum;
}
echo sumUpTo(5) . "<br>";   // 15

echo "<h2>Lekcja 12, slajd 5: ta sama nazwa, różne zmienne</h2>";
$counter = 100;
function localCounter() {
    $counter = 5;            // its own $counter, unrelated to the one outside
    echo $counter . "<br>";
}
localCounter();              // 5
echo $counter . "<br>";      // 100

echo "<h2>Lekcja 12, slajd 6: zmienna z wnętrza funkcji poza nią nie istnieje</h2>";
echo sumUpTo(5) . "<br>";   // 15
// Uncomment to get Warning: Undefined variable $sum and an empty line after it.
// $sum lived only while sumUpTo was running. Comment it back afterwards.
// echo $sum . "<br>";
echo "Zmienna \$sum poza funkcją nie istnieje.<br>";

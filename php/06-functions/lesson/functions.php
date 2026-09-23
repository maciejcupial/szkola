<?php
// Lessons 10-12: own functions, live coding.
// Lesson 10 slides 3-7, lesson 11 slides 3-7, lesson 12 slides 4-6.
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

echo "<h2>Lekcja 10, slajd 4: funkcja jako maszynka</h2>";
function squareArea($side) {
    $area = $side * $side;
    return $area;
}
echo squareArea(5) . "<br>";   // 25

echo "<h2>Lekcja 10, slajd 5: definicja raz, wywołanie wiele razy</h2>";
// Reuses squareArea() from above: a second definition would be a Fatal error.
echo squareArea(3) . "<br>";    // 9
echo squareArea(5) . "<br>";    // 25
echo squareArea(10) . "<br>";   // 100

echo "<h2>Lekcja 10, slajd 6: return, skok i powrót z wynikiem</h2>";
echo squareArea(4) . "<br>";   // 16

echo "<h2>Lekcja 10, slajd 7: trzy typowe błędy</h2>";
// Error 1: echo instead of return, prints 16 then NULL
// function squareAreaEcho($side) { echo $side * $side; }
// $result = squareAreaEcho(4);
// var_dump($result);

// Error 2: Fatal error: Uncaught ArgumentCountError: Too few arguments ...
// echo squareArea();

// Error 3: Parse error: syntax error, unexpected integer "2" (blanks the whole page)
// function 2pole($side) { return $side * $side; }
echo "Wszystkie trzy błędy są zakomentowane, strona działa.<br>";

echo "<h2>Lekcja 11, slajd 3: parametr wymagany i parametr domyślny</h2>";
function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    return "Cześć, $name!";
}
echo "Sygnatura: greetUser(\$name, \$language = \"pl\")<br>";

echo "<h2>Lekcja 11, slajd 4: które wywołanie jest poprawne</h2>";
echo greetUser("Ala") . "<br>";         // Cześć, Ala!
echo greetUser("Ala", "en") . "<br>";   // Hello, Ala!
// Fatal error: Uncaught ArgumentCountError: Too few arguments ...
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
echo $text . "<br>";          // cisza

echo "<h2>Lekcja 12, slajd 4: pętla while z akumulatorem</h2>";
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
    $counter = 5;
    echo $counter . "<br>";
}
localCounter();              // 5
echo $counter . "<br>";      // 100

echo "<h2>Lekcja 12, slajd 6: zmienna z wnętrza funkcji poza nią nie istnieje</h2>";
echo sumUpTo(5) . "<br>";   // 15
// Warning: Undefined variable $sum
// echo $sum . "<br>";
echo "Zmienna \$sum poza funkcją nie istnieje.<br>";

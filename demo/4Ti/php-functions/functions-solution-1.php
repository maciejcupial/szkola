<?php
// Lesson 10 (4Ti): model solution of the computer exercise from slide 9 of slajdy_1.html.
// The slide tells students to write it in their own functions.php; here it is a separate file,
// because functions.php in this folder is the teacher's live-coding file.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/functions-solution-1.php
header("Content-Type: text/html; charset=UTF-8");

function squareArea($side) {
    $area = $side * $side;
    return $area;          // return, not echo: the caller decides what to do with the value
}

echo squareArea(3) . "<br>";    // 9
echo squareArea(5) . "<br>";    // 25
echo squareArea(10) . "<br>";   // 100

// Dla szybkich: druga funkcja, obwód kwadratu.
function squarePerimeter($side) {
    return 4 * $side;
}

echo squarePerimeter(3) . "<br>";    // 12
echo squarePerimeter(5) . "<br>";    // 20
echo squarePerimeter(10) . "<br>";   // 40

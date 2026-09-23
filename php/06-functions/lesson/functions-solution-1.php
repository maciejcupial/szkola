<?php
// Lesson 10, slide 9: model solution of the exercise.
header("Content-Type: text/html; charset=UTF-8");

function squareArea($side) {
    $area = $side * $side;
    return $area;
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

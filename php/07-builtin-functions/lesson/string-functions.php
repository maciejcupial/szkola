<?php
// Lesson 13, slides 3-6: built-in functions for text.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: funkcja własna kontra funkcja wbudowana</h2>";
function squareArea($bok) {
    return $bok * $bok;
}
echo squareArea(4) . "<br>";          // 16
echo strlen("Ala ma kota") . "<br>";    // 11

echo "<h2>Slajd 4: cztery funkcje na tekst</h2>";
$text = " Ala ma kota ";
echo strlen($text) . "<br>";                            // 13
echo "[" . trim($text) . "]<br>";                       // [Ala ma kota]
echo "[" . strtoupper($text) . "]<br>";                 // [ ALA MA KOTA ]
echo "[" . str_replace("kota", "psa", $text) . "]<br>";  // [ Ala ma psa ]
// strlen() counts bytes: „ł” takes 2 in UTF-8.
echo strlen("zł") . "<br>";             // 3
echo mb_strlen("zł") . "<br>";          // 2

echo "<h2>Slajd 5: trim() przed i po</h2>";
echo "[" . $text . "] strlen = " . strlen($text) . "<br>";   // [ Ala ma kota ] strlen = 13
$trimmed = trim($text);
echo "[" . $trimmed . "] strlen = " . strlen($trimmed) . "<br>";   // [Ala ma kota] strlen = 11
echo "[" . trim("   Ala   ma   kota   ") . "]<br>";   // [Ala   ma   kota]

echo "<h2>Slajd 6: str_replace() zamienia fragment</h2>";
echo str_replace("kota", "psa", $trimmed) . "<br>";     // Ala ma psa
// Swapped arguments: no error, the subject comes back unchanged.
echo str_replace($trimmed, "kota", "psa") . "<br>";     // psa
echo str_replace("a", "-", "ala ma kota") . "<br>";     // -l- m- kot-

<?php
// Lesson 13 (4Ti): built-in functions 1/2, ready-made functions for text.
// Live-coding target for slides 3-6 of 26_php_funkcje_wbudowane/slajdy_1.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/string-functions.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Slajd 3: funkcja własna kontra funkcja wbudowana</h2>";
// An own function: you write the whole body yourself, like in lessons 10-12.
// The name stays as it is on the slide, so the projector matches the screen.
function squareArea($bok) {
    return $bok * $bok;
}
echo squareArea(4) . "<br>";          // 16
// A built-in function: the body is already inside PHP, you only call it by name.
echo strlen("Ala ma kota") . "<br>";    // 11

echo "<h2>Slajd 4: cztery funkcje na tekst</h2>";
$text = " Ala ma kota ";                // one space at the start, one at the end
echo strlen($text) . "<br>";                            // 13, spaces count as characters
echo "[" . trim($text) . "]<br>";                       // [Ala ma kota]
echo "[" . strtoupper($text) . "]<br>";                 // [ ALA MA KOTA ], the spaces stay
echo "[" . str_replace("kota", "psa", $text) . "]<br>";  // [ Ala ma psa ]
// strlen counts bytes, not letters. In UTF-8 „ł” takes 2 bytes, so the count can surprise you.
echo strlen("zł") . "<br>";             // 3, although the word has 2 letters
echo mb_strlen("zł") . "<br>";          // 2, mb_strlen counts letters

echo "<h2>Slajd 5: trim() przed i po</h2>";
echo "[" . $text . "] strlen = " . strlen($text) . "<br>";   // [ Ala ma kota ] strlen = 13
$trimmed = trim($text);
echo "[" . $trimmed . "] strlen = " . strlen($trimmed) . "<br>";   // [Ala ma kota] strlen = 11
// Only the edges are cleaned. Spaces between words stay where they were.
echo "[" . trim("   Ala   ma   kota   ") . "]<br>";   // [Ala   ma   kota]

echo "<h2>Slajd 6: str_replace() zamienia fragment</h2>";
// Argument order: what to look for, what to put instead, where to look.
echo str_replace("kota", "psa", $trimmed) . "<br>";     // Ala ma psa
// Swapped arguments are the exam trap: PHP finds nothing, shows no error and returns
// the third argument unchanged.
echo str_replace($trimmed, "kota", "psa") . "<br>";     // psa
// str_replace() changes every occurrence, not just the first one.
echo str_replace("a", "-", "ala ma kota") . "<br>";     // -l- m- kot-

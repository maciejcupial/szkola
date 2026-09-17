<?php
// Lesson 13 (4Ti): model solution of exercise 1 (slide 8 of slajdy_1.html).
// Students save it in their own folder under the name string-functions.php.
// Expected: [Ala ma kota], then ALA MA KOTA, then Ala ma psa.
// Run: php -S localhost:8000 in this folder, http://localhost:8000/exercise1-string-functions.php
header("Content-Type: text/html; charset=UTF-8");

$text = " Ala ma kota ";

// Step 2: trim() first, the square brackets show that the edge spaces are gone.
$trimmed = trim($text);
echo "[" . $trimmed . "]<br>";      // [Ala ma kota]

// Step 3: the later steps work on $trimmed, not on $text, so the spaces do not come back.
$upper = strtoupper($trimmed);
echo $upper . "<br>";               // ALA MA KOTA

// Step 4: order of arguments: what to look for, what to put instead, where to look.
$replaced = str_replace("kota", "psa", $trimmed);
echo $replaced . "<br>";            // Ala ma psa

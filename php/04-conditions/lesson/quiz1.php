<?php
// Lesson 6, slide 11: "co wypisze?"
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1</h2>";
$age = 17;
if ($age >= 18) { echo "A"; } else { echo "B"; }                    // B

echo "<h2>2</h2>";
$temp = 25;
if ($temp > 30) { echo "gorąco"; }
elseif ($temp > 20) { echo "ciepło"; }                              // ciepło
else { echo "zimno"; }

echo "<h2>3</h2>";
$name = "0";
if ($name) { echo "jest imię"; }
else { echo "brak imienia"; }                                       // brak imienia

echo "<h2>4</h2>";
$x = 10;
$y = 3;
if ($x > 5 && $y > 5) { echo "oba"; }
elseif ($x > 5 || $y > 5) { echo "jedno"; }                         // jedno
else { echo "żadne"; }

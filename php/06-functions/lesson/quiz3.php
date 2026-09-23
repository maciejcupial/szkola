<?php
// Lesson 12, slides 2 and 8: "co wypisze?" quiz.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze echo greetUser(\"Kasia\");</h2>";
function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    return "Cześć, $name!";
}
echo greetUser("Kasia");   // Cześć, Kasia!
echo "<br>";

echo "<h2>2. Egzamin: policz(1), jaki wynik zwróci funkcja?</h2>";
function policz($Z) {
    while ($Z < 5) {
        $Z += 2 * $Z + 1;      // 1 -> 4 -> 13
    }
    return $Z;
}
echo policz(1);   // 13, odpowiedź A
echo "<br>";

echo "<h2>3. Egzamin: co wypisze ten warunek?</h2>";
$a = 3;
$b = 9;
$c = 7;
if ($a > $b && $a > $c) echo $a;
elseif ($b > $c) echo $b;      // 9, odpowiedź B
else echo $c;
echo "<br>";

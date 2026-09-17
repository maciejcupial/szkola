<?php
// Lesson 12 (4Ti): „co wypisze?” fragments from slajdy_3.html, warm-up (slide 2) and the two
// exam questions (slide 8, CKE EE.09 styczeń 2021 zad. 8 and E.14 wrzesień 2015 zad. 29).
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/quiz3.php
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>1. Rozgrzewka: co wypisze echo greetUser(\"Kasia\");</h2>";
function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    return "Cześć, $name!";
}
echo greetUser("Kasia");   // Cześć, Kasia!, bo $language ma wartość domyślną „pl”
echo "<br>";

echo "<h2>2. Egzamin: policz(1), jaki wynik zwróci funkcja?</h2>";
function policz($Z) {
    while ($Z < 5) {
        $Z += 2 * $Z + 1;      // 1 daje 4, 4 daje 13, potem warunek jest fałszywy
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
elseif ($b > $c) echo $b;      // 9, odpowiedź B: wypisywana jest liczba największa
else echo $c;
echo "<br>";

<?php
// Lesson 26, slide 9: exam EE.09 2022 zad. 9 and 37, names as on the slide.
session_start();

// Question 2 code, word for word; before any HTML.
if (!isset($_COOKIE["visits"])) $counter = 1;
else $counter = intval($_COOKIE["visits"]) + 1;
setcookie("visits", $counter);
header("Content-Type: text/html; charset=UTF-8");

$_SESSION["choiceId"] = 4;   // odpowiedź D
$choiceId = $_SESSION["choiceId"];   // 4

// No expiry: the cookie lasts until the browser closes.
// $counter: 1, then 2, 3 after each refresh
?>
<h2>1. Egzamin: zmienna sesji choiceId o wartości 4</h2>
<?= $choiceId ?><br>

<h2>2. Egzamin: co robi wielokrotne wykonanie kodu?</h2>
<?= $counter ?><br>

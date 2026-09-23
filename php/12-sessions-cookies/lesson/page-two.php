<?php
// Lesson 26, slides 7 and 10: name from the session, counter from a cookie.
session_start();

if (!isset($_COOKIE["visitCount"])) {
    $visitCount = 1;
} else {
    $visitCount = intval($_COOKIE["visitCount"]) + 1;
}
// Before any echo; $_COOKIE changes only with the next request.
setcookie("visitCount", $visitCount, time() + 60 * 60 * 24 * 30);
header("Content-Type: text/html; charset=UTF-8");

// ?? avoids Warning: Undefined array key "userName" after the browser closes.
$userName = $_SESSION["userName"] ?? "";
echo "Witaj, " . htmlspecialchars($userName) . "! To Twoje wejście numer " . $visitCount;
// Witaj, Jan! To Twoje wejście numer 3

// Punkt 5: po zamknięciu przeglądarki imię znika, licznik zostaje:
// Witaj, ! To Twoje wejście numer 4

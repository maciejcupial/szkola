<?php
// Lesson 26, slides 6 and 12: cookies. Refresh twice; F12, Application, Cookies.

setcookie("visitCount", 3, time() + 60 * 60 * 24 * 30);

// Slide 12: production flags (browsers exempt localhost from secure).
setcookie("themeMode", "dark", [
    "expires" => time() + 60 * 60 * 24 * 30,
    "httponly" => true,
    "secure" => true,
    "samesite" => "Lax",
]);
header("Content-Type: text/html; charset=UTF-8");

echo '<h2>Lekcja 26, slajd 6: setcookie() i $_COOKIE</h2>';
// The cookie set above comes back only with the next request.
echo htmlspecialchars($_COOKIE["visitCount"] ?? "jeszcze brak") . "<br>";   // jeszcze brak, then 3

echo "<h2>Lekcja 26, slajd 6: czas życia jako znacznik czasu</h2>";
echo 60 * 60 * 24 * 30 . "<br>";   // 2592000
echo date("Y-m-d", time() + 60 * 60 * 24 * 30) . "<br>";   // today + 30 days

echo "<h2>Lekcja 26, slajd 6: bez haseł w ciasteczku</h2>";
// setcookie("password", "tajne123", time() + 3600);   // do not do this
echo "Hasło nigdy nie trafia do ciasteczka<br>";   // Hasło nigdy nie trafia do ciasteczka

// Warning: Cannot modify header information - headers already sent
// setcookie("late", "1", time() + 3600);

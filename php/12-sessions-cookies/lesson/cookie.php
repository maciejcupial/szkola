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

// The cookie set above comes back only with the next request.
$visitCount = $_COOKIE["visitCount"] ?? "jeszcze brak";   // jeszcze brak, then 3

$lifetime = 60 * 60 * 24 * 30;                             // 2592000
$expiryDate = date("Y-m-d", time() + 60 * 60 * 24 * 30);   // today + 30 days

// setcookie("password", "tajne123", time() + 3600);   // do not do this
?>
<h2>Lekcja 26, slajd 6: setcookie() i $_COOKIE</h2>
<?= htmlspecialchars($visitCount) ?><br>

<h2>Lekcja 26, slajd 6: czas życia jako znacznik czasu</h2>
<?= $lifetime ?><br>
<?= $expiryDate ?><br>

<h2>Lekcja 26, slajd 6: bez haseł w ciasteczku</h2>
Hasło nigdy nie trafia do ciasteczka<br>
<?php
// Here, after the HTML: Warning: Cannot modify header information - headers already sent
// setcookie("late", "1", time() + 3600);

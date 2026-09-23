<?php
// Lesson 26, slide 5: sessions. Refresh; ?destroy=1 ends the session.

// Before any echo; every file using $_SESSION needs it.
session_start();
header("Content-Type: text/html; charset=UTF-8");

echo '<h2>Lekcja 26, slajd 5: session_start() i $_SESSION</h2>';
$_SESSION["userName"] = "Jan";
$_SESSION["visitCount"] = ($_SESSION["visitCount"] ?? 0) + 1;
echo htmlspecialchars($_SESSION["userName"]) . "<br>";   // Jan
echo $_SESSION["visitCount"] . "<br>";                    // 1, then 2, 3 after each refresh

echo "<h2>Lekcja 26, slajd 5: numerek z szatni</h2>";
echo htmlspecialchars(session_id()) . "<br>";   // e.g. 8f3a1c...

echo "<h2>Lekcja 26, slajd 5: session_destroy()</h2>";
if (isset($_GET["destroy"])) {
    // session_destroy() does not empty $_SESSION of this request.
    $_SESSION = [];
    session_destroy();
    echo "Sesja zniszczona<br>";   // Sesja zniszczona
} else {
    echo '<a href="session.php?destroy=1">Zniszcz sesję</a><br>';
}

echo "<h2>Lekcja 26, slajd 5: ciekawostka, gdzie leży plik sesji</h2>";
// Empty setting means the system temp folder.
$savePath = session_save_path() ?: sys_get_temp_dir();
echo htmlspecialchars($savePath) . "<br>";   // e.g. C:\xampp\tmp

// session_start() after an echo: Warning: Session cannot be started after headers have already been sent

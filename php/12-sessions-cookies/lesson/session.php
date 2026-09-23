<?php
// Lesson 26, slide 5: sessions. Refresh; ?destroy=1 ends the session.

// Before any HTML; every file using $_SESSION needs it.
session_start();
header("Content-Type: text/html; charset=UTF-8");

$_SESSION["userName"] = "Jan";
$_SESSION["visitCount"] = ($_SESSION["visitCount"] ?? 0) + 1;
$userName = $_SESSION["userName"];       // Jan
$visitCount = $_SESSION["visitCount"];   // 1, then 2, 3 after each refresh

$sessionId = session_id();   // e.g. 8f3a1c...

$destroyed = isset($_GET["destroy"]);
if ($destroyed) {
    // session_destroy() does not empty $_SESSION of this request.
    $_SESSION = [];
    session_destroy();
}

// Empty setting means the system temp folder.
$savePath = session_save_path() ?: sys_get_temp_dir();   // e.g. C:\xampp\tmp
?>
<h2>Lekcja 26, slajd 5: session_start() i $_SESSION</h2>
<?= htmlspecialchars($userName) ?><br>
<?= $visitCount ?><br>

<h2>Lekcja 26, slajd 5: numerek z szatni</h2>
<?= htmlspecialchars($sessionId) ?><br>

<h2>Lekcja 26, slajd 5: session_destroy()</h2>
<?php if ($destroyed): ?>
  Sesja zniszczona<br>
<?php else: ?>
  <a href="session.php?destroy=1">Zniszcz sesję</a><br>
<?php endif; ?>

<h2>Lekcja 26, slajd 5: ciekawostka, gdzie leży plik sesji</h2>
<?= htmlspecialchars($savePath) ?><br>
<?php
// Here, after the HTML, session_start() gives:
// Warning: Session cannot be started after headers have already been sent

<?php
// Worked example: remembering a visitor with a session, a cookie and a file.
// Same split as in frameworks: index.php controller, functions.php model, templates/ views.
require_once "functions.php";

// Before any output, even an empty line before <?php.
session_start();

if (isset($_POST["logout"])) {
    // session_destroy() does not empty $_SESSION of this request.
    $_SESSION = [];
    session_destroy();
} elseif (!empty($_POST["userName"])) {
    $_SESSION["userName"] = trim($_POST["userName"]);
}

$userName = $_SESSION["userName"] ?? "";

$visitCount = nextVisitCount($_COOKIE["visitCount"] ?? null);

// $_COOKIE changes only with the next request, so the page prints $visitCount.
setcookie("visitCount", $visitCount, time() + 60 * 60 * 24 * 30);

// TU ZMIEŃ: nazwa pliku, w którym serwer liczy wyświetlenia wszystkich odwiedzających
$viewsFile = "views.txt";

$totalViews = countView($viewsFile);

$pageTitle = "Sesja, ciasteczko i plik";
require "templates/header.php";
require "templates/home.php";
require "templates/footer.php";

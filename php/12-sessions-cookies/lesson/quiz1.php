<?php
// Lesson 26, slides 2-3: warm-up answers as code.
require_once "functions.php";
require_once "functions.php";   // skipped, already loaded
// Fatal error: Cannot redeclare function greet()
// require "functions.php";
header("Content-Type: text/html; charset=UTF-8");

$postDump = dumpToString($_POST);                 // array(0) {}
$userName = $_POST["userName"] ?? "brak";         // brak

$emptyBlank = dumpToString(empty(""));            // bool(true)
$emptyZero = dumpToString(empty("0"));            // bool(true): a typed 0 looks blank
$emptyFive = dumpToString(empty("5"));            // bool(false)
$age = "0";
$ageIsBlank = dumpToString($age === "");          // bool(false)

// Warning: Failed to open stream, the page goes on
// include "missing.php";
// Fatal error: Failed opening required 'missing.php'
// require "missing.php";

$greeting = greet("Jan");                         // Cześć, Jan!
?>
<h2>Lekcja 26, slajd 2, pytanie 1: z jakiej tablicy odbieramy dane z post?</h2>
<?= htmlspecialchars($postDump) ?><br>
<?= htmlspecialchars($userName) ?><br>

<h2>Lekcja 26, slajd 2, pytanie 2: dlaczego empty("0") to pułapka?</h2>
<?= htmlspecialchars($emptyBlank) ?><br>
<?= htmlspecialchars($emptyZero) ?><br>
<?= htmlspecialchars($emptyFive) ?><br>
<?= htmlspecialchars($ageIsBlank) ?><br>

<h2>Lekcja 26, slajd 2, pytanie 3: require dla połączenia z bazą</h2>
require zatrzymuje stronę, include idzie dalej bez bazy<br>

<h2>Lekcja 26, slajd 3, pytanie 1: co robi include "header.php";?</h2>
<?php include "header.php"; ?>
Treść strony pod nagłówkiem<br>

<h2>Lekcja 26, slajd 3, pytanie 2: brak którego pliku zatrzyma stronę?</h2>
Oba wiersze z brakującym plikiem są zakomentowane, strona działa.<br>

<h2>Lekcja 26, slajd 3, pytanie 3: dlaczego require_once dla functions.php?</h2>
<?= htmlspecialchars($greeting) ?><br>

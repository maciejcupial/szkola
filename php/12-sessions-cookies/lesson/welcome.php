<?php
// Lesson 26, slide 4: request 2. The server remembers nothing.
require_once "functions.php";
header("Content-Type: text/html; charset=UTF-8");

$userNameExists = dumpToString(isset($userName));   // bool(false)
// Warning: Undefined variable $userName
// $greeting = "Witaj, " . $userName . "!";
?>
<h2>Lekcja 26, slajd 4: żądanie 2, welcome.php</h2>
<?= htmlspecialchars($userNameExists) ?><br>
A kto to właściwie pyta?<br>

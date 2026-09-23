<?php
// Lesson 26, slide 6: greeting.php with error_reporting(0).
header("Content-Type: text/html; charset=UTF-8");

error_reporting(0);                     // hides errors from here on, does not fix them
$greeting = "Cześć, " . $name . "!";   // Cześć, !
?>
<p><?= htmlspecialchars($greeting) ?></p>

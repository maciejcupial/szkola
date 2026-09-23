<?php
// test: skip
// Lesson 26, slide 3. Warns on purpose.
// $name must stay on line 7, as on the slide.
header("Content-Type: text/html; charset=UTF-8");

$greeting = "Cześć, " . $name . "!";   // Warning: Undefined variable $name, then Cześć, !
?>
<p><?= htmlspecialchars($greeting) ?></p>

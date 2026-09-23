<?php
// test: skip
// Lesson 26, slide 3. Warns on purpose.
// The echo must stay on line 7, as on the slide.
header("Content-Type: text/html; charset=UTF-8");

echo "Cześć, " . $name . "!";   // Warning: Undefined variable $name, then Cześć, !

// No htmlspecialchars() here: with null it adds a second message (Deprecated).

<?php
// Lesson 26, slide 4: request 2. The server remembers nothing.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 26, slajd 4: żądanie 2, welcome.php</h2>";
var_dump(isset($userName));   // bool(false)
echo "<br>";
// Warning: Undefined variable $userName
// echo "Witaj, " . $userName . "!";
echo "A kto to właściwie pyta?<br>";   // A kto to właściwie pyta?

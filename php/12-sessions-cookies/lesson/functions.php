<?php
// Helpers for quiz1.php (slide 3) and welcome.php.
function greet($name) {
    return "Cześć, " . $name . "!";
}

// Returns what var_dump() would print, so the page can show it below the logic.
function dumpToString($value) {
    ob_start();   // catch the printed text instead of sending it
    var_dump($value);
    return trim(ob_get_clean());
}

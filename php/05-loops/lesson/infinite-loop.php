<?php
// test: skip
// Infinite loop demo. Lesson 8, slide 6.
// XAMPP: Fatal error: Maximum execution time of 30 seconds exceeded. php -S: stop with Ctrl+C.
header("Content-Type: text/html; charset=UTF-8");

echo "Kręcę się w kółko, poczekaj na komunikat o przekroczeniu 30 sekund.";

while (true) {
}

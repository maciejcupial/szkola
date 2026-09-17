<?php
// test: skip
// Lesson 8 (4Ti): the infinite loop demo for slide 6 of 20_php_petle/slajdy_1.html.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/infinite-loop.php
// The tab keeps loading and after 30 seconds PHP stops the script with
// "Fatal error: Maximum execution time of 30 seconds exceeded". Close the tab after the demo.
// This is what a while loop does when the counter never changes, the classic forgotten $i++.
// The limit comes from Apache in XAMPP; the built-in server php -S has no limit, stop it with Ctrl+C.
header("Content-Type: text/html; charset=UTF-8");

echo "Kręcę się w kółko, poczekaj na komunikat o przekroczeniu 30 sekund.";

while (true) {
}

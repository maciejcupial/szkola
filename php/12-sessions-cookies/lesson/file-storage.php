<?php
// Lesson 26, slide 8: saving to a file. Writes counter.txt and visits-log.txt here.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 26, slajd 8: file_put_contents() i file_get_contents()</h2>";
echo file_put_contents("counter.txt", "7") . "<br>";   // 1 (bytes written)
echo file_get_contents("counter.txt") . "<br>";        // 7

echo "<h2>Lekcja 26, slajd 8: bez flagi plik zostaje nadpisany</h2>";
file_put_contents("counter.txt", "8");
echo file_get_contents("counter.txt") . "<br>";   // 8

echo "<h2>Lekcja 26, slajd 8: FILE_APPEND dopisuje na końcu</h2>";
file_put_contents("visits-log.txt", date("H:i:s") . " wejście\n", FILE_APPEND);
$lines = file_get_contents("visits-log.txt");
echo nl2br(htmlspecialchars($lines));   // 10:15:02 wejście (one line per refresh)

<?php
// Lesson 26, slide 8: saving to a file. Writes counter.txt and visits-log.txt here.
header("Content-Type: text/html; charset=UTF-8");

$bytesWritten = file_put_contents("counter.txt", "7");   // 1 (bytes written)
$firstRead = file_get_contents("counter.txt");            // 7

file_put_contents("counter.txt", "8");
$secondRead = file_get_contents("counter.txt");   // 8

file_put_contents("visits-log.txt", date("H:i:s") . " wejście\n", FILE_APPEND);
$logLines = explode("\n", trim(file_get_contents("visits-log.txt")));   // 10:15:02 wejście (one per refresh)
?>
<h2>Lekcja 26, slajd 8: file_put_contents() i file_get_contents()</h2>
<?= $bytesWritten ?><br>
<?= htmlspecialchars($firstRead) ?><br>

<h2>Lekcja 26, slajd 8: bez flagi plik zostaje nadpisany</h2>
<?= htmlspecialchars($secondRead) ?><br>

<h2>Lekcja 26, slajd 8: FILE_APPEND dopisuje na końcu</h2>
<?php foreach ($logLines as $line): ?>
  <?= htmlspecialchars($line) ?><br>
<?php endforeach; ?>

<?php
// Lesson 25, slide 6: model, the database connection in one file.
// $db set here is visible in the file that requires it.
mysqli_report(MYSQLI_REPORT_OFF);
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    die("Błąd połączenia z bazą danych.");
}

<?php
// Lesson 18 (4Ti 20), slide 8: two exam questions (EE.09 2020-01 q38, E.14 2019-06 q40).
header("Content-Type: text/html; charset=UTF-8");

mysqli_report(MYSQLI_REPORT_OFF);

// Question 1. Slide version, fails in XAMPP: Warning: mysqli_connect(): (HY000/1045): Access denied ...
// $db = mysqli_connect("localhost", "root", "qwerty", "baza1");
$db = mysqli_connect("localhost", "root", "", "shop");
if (!$db) {
    // Answer B
    die("Błąd połączenia z bazą danych.");
}
mysqli_close($db);

// Question 2, answer D
$a = "localhost";
$b = "root";
$c = "";
$d = "shop";
$db2 = mysqli_connect($a, $b, $c, $d) or die('Brak połączenia z serwerem MySQL.');
mysqli_close($db2);
?>
<h2>1. Co powinno być w miejscu trzech kropek?</h2>
Połączenie udane, blok if został pominięty.<br>

<h2>2. Jakie wartości muszą mieć zmienne?</h2>
Połączono z bazą <?= $d ?>.

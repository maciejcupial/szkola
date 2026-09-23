<?php
// test: skip
// Lesson 25, slide 4: require with a typo, fails on purpose; the page stops.
header("Content-Type: text/html; charset=UTF-8");

include "header.php";
echo "Kubek - 19.90 zł<br>";
require "fotter.php";
echo "Tej linii nie zobaczysz, strona zatrzymała się na require.<br>";

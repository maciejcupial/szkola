<?php
// test: skip
// Lesson 25, slide 4: include with a typo, warns on purpose; the page goes on.
header("Content-Type: text/html; charset=UTF-8");

include "header.php";
echo "Kubek - 19.90 zł<br>";
include "fotter.php";
echo "Ta linia stoi za include, a mimo to się wyświetla.<br>";

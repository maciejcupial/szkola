<?php
// Lesson 11 (4Ti): model solution of the computer exercise from slide 9 of slajdy_2.html.
// Students add greetUser() to their own functions.php; here it is a separate file,
// because functions.php in this folder is the teacher's live-coding file.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/functions-solution-2.php
header("Content-Type: text/html; charset=UTF-8");

function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    // Dla szybkich: trzecia gałąź, te trzy linie są rozszerzeniem ćwiczenia.
    if ($language === "de") {
        return "Hallo, $name!";
    }
    return "Cześć, $name!";   // the default branch, used for "pl" and for anything unknown
}

echo greetUser("Ala") . "<br>";         // Cześć, Ala!, $language keeps the default value
echo greetUser("Ala", "en") . "<br>";   // Hello, Ala!

// Dla szybkich: wywołanie trzeciej gałęzi.
echo greetUser("Ala", "de") . "<br>";   // Hallo, Ala!

<?php
// Lesson 11, slide 9: model solution of the exercise.
header("Content-Type: text/html; charset=UTF-8");

function greetUser($name, $language = "pl") {
    if ($language === "en") {
        return "Hello, $name!";
    }
    // Dla szybkich:
    if ($language === "de") {
        return "Hallo, $name!";
    }
    return "Cześć, $name!";
}

echo greetUser("Ala") . "<br>";         // Cześć, Ala!
echo greetUser("Ala", "en") . "<br>";   // Hello, Ala!

// Dla szybkich:
echo greetUser("Ala", "de") . "<br>";   // Hallo, Ala!

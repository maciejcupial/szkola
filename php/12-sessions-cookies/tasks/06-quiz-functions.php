<?php
// Task 6 of 6, model: checking an answer and the final message for 06-quiz.php.

// " Session_Start " also counts.
function isCorrect(string $given, string $expected): bool
{
    // TU ZMIEŃ: porównaj strtolower(trim($given)) z strtolower($expected) i zwróć wynik
    return false;
}

// "Wynik: 2 z 3. Dobra robota." All points: "Komplet punktów!", at least half: "Dobra robota.",
// less than half: "Wróć do slajdów i spróbuj jeszcze raz."
function resultMessage(int $score, int $total): string
{
    // TU ZMIEŃ: wybierz komentarz instrukcją if / elseif / else i zwróć całe zdanie
    return "";
}

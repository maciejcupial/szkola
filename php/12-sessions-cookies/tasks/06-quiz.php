<?php
// Task 6 of 6 (dla chętnych): a three-question quiz kept in the session.
// Split as in index.php: this controller, 06-quiz-functions.php (model), templates/06-quiz.php (view).
// Expected (answers session_start, cookie, 60):
//   start:  Pytanie 1 z 3: Jaką funkcją uruchamiamy sesję? (bez nawiasów)
//   empty answer sent:  Wpisz odpowiedź.  (still question 1)
//   answer session_start:  Dobrze!  then question 2
//   answer cookie:  Źle. Poprawna odpowiedź: setcookie  then question 3
//   answer 60:  Dobrze!  then  Koniec quizu. Wynik: 2 z 3. Dobra robota.
//   click „Zacznij od nowa”:  Pytanie 1 z 3 again.

require_once "06-quiz-functions.php";

session_start();

$questions = [
    ["question" => "Jaką funkcją uruchamiamy sesję? (bez nawiasów)", "answer" => "session_start"],
    ["question" => "Jaką funkcją zapisujemy ciasteczko? (bez nawiasów)", "answer" => "setcookie"],
    ["question" => "Ile sekund ma jedna minuta?", "answer" => "60"],
];

// TU ZMIEŃ: gdy przyszło pole restart, wyczyść $_SESSION i zniszcz sesję

// TU ZMIEŃ: odczytaj z sesji questionIndex i score (gdy ich nie ma, oba od 0)
$questionIndex = 0;
$score = 0;

$error = "";
$feedback = "";

// TU ZMIEŃ: gdy przyszło pole answer, a pytania trwają:
// 1. pusta (trim(...) === "", nie empty(), bo "0" to odpowiedź): $error = "Wpisz odpowiedź.";
// 2. isCorrect(): dobra +1 punkt i $feedback "Dobrze!", zła "Źle. Poprawna odpowiedź: " + odpowiedź;
// 3. następne pytanie, zapisz questionIndex i score w sesji.

$questionCount = count($questions);
$finished = $questionIndex >= $questionCount;
if ($finished) {
    $resultText = resultMessage($score, $questionCount);
} else {
    $questionNumber = $questionIndex + 1;
    $questionText = $questions[$questionIndex]["question"];
}

require "templates/06-quiz.php";

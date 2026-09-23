<?php
// Task 6 of 6 (dla chętnych): a three-question quiz kept in the session.
// Expected (answers session_start, cookie, 60):
//   start:  Pytanie 1 z 3: Jaką funkcją uruchamiamy sesję? (bez nawiasów)
//   empty answer sent:  Wpisz odpowiedź.  (still question 1)
//   answer session_start:  Dobrze!  then question 2
//   answer cookie:  Źle. Poprawna odpowiedź: setcookie  then question 3
//   answer 60:  Dobrze!  then  Koniec quizu. Wynik: 2 z 3. Dobra robota.
//   click „Zacznij od nowa”:  Pytanie 1 z 3 again.

session_start();

$questions = [
    ["question" => "Jaką funkcją uruchamiamy sesję? (bez nawiasów)", "answer" => "session_start"],
    ["question" => "Jaką funkcją zapisujemy ciasteczko? (bez nawiasów)", "answer" => "setcookie"],
    ["question" => "Ile sekund ma jedna minuta?", "answer" => "60"],
];

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

$finished = $questionIndex >= count($questions);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 6: quiz w sesji</title>
  <style>
    :root {
      --background: #f5f6f8;
      --text: #1f2430;
      --muted: #5b6472;
      --accent: #2563eb;
      --border: #d3d8e0;
      --card: #ffffff;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background: var(--background);
      color: var(--text);
      max-width: 540px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 20px;
    }

    .meta {
      color: var(--muted);
    }

    .error {
      color: #b91c1c;
    }

    .button {
      background: var(--accent);
      color: #ffffff;
      border: 0;
      border-radius: 6px;
      padding: 8px 14px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <main class="card">
    <h1>Zadanie 6: quiz w sesji</h1>
    <?php if ($feedback): ?>
      <p><?= htmlspecialchars($feedback) ?></p>
    <?php endif; ?>
    <?php if ($finished): ?>
      <p>Koniec quizu. <?= htmlspecialchars(resultMessage($score, count($questions))) ?></p>
    <?php else: ?>
      <p>
        Pytanie <?= $questionIndex + 1 ?> z <?= count($questions) ?>:
        <?= htmlspecialchars($questions[$questionIndex]["question"]) ?>
      </p>
      <form method="post" action="06-quiz.php">
        <label for="answer">Odpowiedź</label>
        <input id="answer" name="answer">
        <button class="button" type="submit">Sprawdź</button>
      </form>
      <?php if ($error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>
    <?php endif; ?>
    <form method="post" action="06-quiz.php">
      <button class="button" type="submit" name="restart" value="1">Zacznij od nowa</button>
    </form>
  </main>
</body>
</html>

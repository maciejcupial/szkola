<?php
// Task 4 of 5: radio button quiz that counts the points.
// Expected for question1 = b, question2 not answered, question3 = c:
//   Pytanie 1: dobrze
//   Pytanie 2: brak odpowiedzi
//   Pytanie 3: źle
//   Wynik: 1 z 3
// and options b (question 1) and c (question 3) stay selected.

// Key = question number, the radio group is named question1, question2...; "options": value => label.
$questions = [
    1 => [
        "text" => "Która tablica odbiera dane wysłane przez method=\"post\"?",
        "options" => ["a" => "\$_GET", "b" => "\$_POST", "c" => "\$_FORM"],
        "correct" => "b",
    ],
    2 => [
        "text" => "Co zwraca empty(\"\"), czyli empty dla pustego tekstu?",
        "options" => ["a" => "true", "b" => "false", "c" => "błąd"],
        "correct" => "a",
    ],
    3 => [
        "text" => "Który atrybut pola formularza staje się kluczem w \$_POST?",
        "options" => ["a" => "id", "b" => "name", "c" => "value"],
        "correct" => "b",
    ],
];

$answers = [];
$results = [];
$score = 0;

// An unchecked radio group sends nothing, so the button has its own name.
if (isset($_POST["check"])) {
    foreach ($questions as $number => $question) {
        // TU ZMIEŃ: $answer = $_POST["question" . $number] ?? ""; zapisz w $answers[$number].
        // Do $results[$number]: pusta "brak odpowiedzi", równa $question["correct"] "dobrze"
        // (i $score + 1), inaczej "źle".
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: quiz</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    fieldset {
      margin-bottom: 12px;
    }
  </style>
</head>
<body>
  <h1>Zadanie 4: quiz o formularzach</h1>
  <p>Policz punkty i pokaż wynik. Po wysłaniu wybrane odpowiedzi mają zostać zaznaczone.</p>

  <form action="04-quiz.php" method="post">
    <?php foreach ($questions as $number => $question): ?>
      <fieldset>
        <legend><?= $number ?>. <?= htmlspecialchars($question["text"]) ?></legend>
        <?php foreach ($question["options"] as $value => $label): ?>
          <!-- TU ZMIEŃ: dopisz checked, gdy ($answers[$number] ?? "") jest równe $value (użyj ? :) -->
          <input type="radio" id="question<?= $number ?>-<?= $value ?>" name="question<?= $number ?>"
                 value="<?= $value ?>">
          <label for="question<?= $number ?>-<?= $value ?>"><?= htmlspecialchars($label) ?></label><br>
        <?php endforeach; ?>
      </fieldset>
    <?php endforeach; ?>
    <button type="submit" name="check">Sprawdź</button>
  </form>

  <?php if (isset($_POST["check"])): ?>
    <h2>Twoje wyniki</h2>
    <ul>
      <?php foreach ($results as $number => $result): ?>
        <li>Pytanie <?= $number ?>: <?= htmlspecialchars($result) ?></li>
      <?php endforeach; ?>
    </ul>
    <p>Wynik: <?= $score ?> z <?= count($questions) ?></p>
  <?php endif; ?>
</body>
</html>

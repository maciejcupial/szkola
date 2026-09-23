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
      <p>Koniec quizu. <?= htmlspecialchars($resultText) ?></p>
    <?php else: ?>
      <p>
        Pytanie <?= $questionNumber ?> z <?= $questionCount ?>:
        <?= htmlspecialchars($questionText) ?>
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

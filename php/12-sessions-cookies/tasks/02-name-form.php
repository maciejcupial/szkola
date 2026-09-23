<?php
// Task 2 of 6, file 1 of 2: save the name in the session; 02-name-greeting.php reads it.
// Expected:
//   type Jan and click „Zapisz”:  Zapisane imię: Jan.  plus the link „Przejdź dalej”
//   click „Przejdź dalej”:  Witaj, Jan! Miło Cię znowu widzieć.
//   click „Wyloguj”:  Nie znam Twojego imienia.
//   come back here:  no saved name and no link, only the empty form.

// TU ZMIEŃ: uruchom sesję

// TU ZMIEŃ: gdy userName nie jest puste (empty()), zapisz trim() z niego w $_SESSION["userName"]

// TU ZMIEŃ: odczytaj imię z sesji, a gdy go tam nie ma, zostaw pusty tekst (operator ??)
$savedName = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: zapamiętaj imię</title>
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
    <h1>Zadanie 2: zapamiętaj imię</h1>
    <form method="post" action="02-name-form.php">
      <label for="user-name">Imię</label>
      <input id="user-name" name="userName">
      <button class="button" type="submit">Zapisz</button>
    </form>
    <?php if ($savedName): ?>
      <p>Zapisane imię: <?= htmlspecialchars($savedName) ?>.</p>
      <p><a href="02-name-greeting.php">Przejdź dalej</a></p>
    <?php endif; ?>
  </main>
</body>
</html>

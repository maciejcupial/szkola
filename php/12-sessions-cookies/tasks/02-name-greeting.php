<?php
// Task 2 of 6, file 2 of 2: greet by the saved name, log out.
// Expected (after saving Jan in 02-name-form.php):
//   Witaj, Jan! Miło Cię znowu widzieć.
//   after clicking „Wyloguj”:  Nie znam Twojego imienia.  plus the link back to the form
//   opened without saving a name first:  Nie znam Twojego imienia.

// TU ZMIEŃ: uruchom sesję (każda strona osobno)

// TU ZMIEŃ: gdy przyszło pole logout, wyczyść tablicę $_SESSION i zniszcz sesję session_destroy()

// TU ZMIEŃ: odczytaj imię z sesji, a gdy go tam nie ma, zostaw pusty tekst
$userName = "";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 2: powitanie</title>
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
    <h1>Zadanie 2: powitanie</h1>
    <?php if ($userName): ?>
      <p>Witaj, <?= htmlspecialchars($userName) ?>! Miło Cię znowu widzieć.</p>
      <form method="post" action="02-name-greeting.php">
        <button class="button" type="submit" name="logout" value="1">Wyloguj</button>
      </form>
    <?php else: ?>
      <p>Nie znam Twojego imienia.</p>
      <p><a href="02-name-form.php">Wróć do formularza</a></p>
    <?php endif; ?>
  </main>
</body>
</html>

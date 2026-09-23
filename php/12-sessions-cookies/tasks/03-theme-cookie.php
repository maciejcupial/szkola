<?php
// Task 3 of 6: remember the color theme in a cookie for one year.
// Expected:
//   first visit:  Wybrany motyw: jasny.  (light page)
//   choose „ciemny” and click „Zapisz”:  Wybrany motyw: ciemny.  (dark page)
//   close the whole browser, open the page again:  Wybrany motyw: ciemny.
//   a cookie edited by hand in F12 to the value pink:  Wybrany motyw: jasny.

// Key: cookie value and <body> CSS class; value: name shown on the page.
$themes = [
    "light" => "jasny",
    "dark" => "ciemny",
];

// TU ZMIEŃ: odczytaj motyw z ciasteczka theme, a gdy go nie ma, przyjmij "light" (operator ??)
$theme = "light";

// TU ZMIEŃ: gdy w $themes nie ma klucza $theme (isset), wróć do "light"

// TU ZMIEŃ: dozwolone pole theme z formularza zapisz w $theme i w ciasteczku theme na rok
// (time() + 60 * 60 * 24 * 365)
// $_COOKIE changes only with the next request, so the page prints $theme.
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: motyw w ciasteczku</title>
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
  <style>
    /* Dark theme */
    body.dark {
      --background: #111827;
      --text: #f3f4f6;
      --muted: #9ca3af;
      --border: #374151;
      --card: #1f2937;
    }
  </style>
</head>
<body class="<?= htmlspecialchars($theme) ?>">
  <main class="card">
    <h1>Zadanie 3: motyw w ciasteczku</h1>
    <p>Wybrany motyw: <?= htmlspecialchars($themes[$theme]) ?>.</p>
    <form method="post" action="03-theme-cookie.php">
      <label for="theme">Motyw</label>
      <select id="theme" name="theme">
        <?php foreach ($themes as $key => $label): ?>
          <option value="<?= htmlspecialchars($key) ?>"<?php if ($key === $theme): ?> selected<?php endif; ?>>
            <?= htmlspecialchars($label) ?>
          </option>
        <?php endforeach; ?>
      </select>
      <button class="button" type="submit">Zapisz</button>
    </form>
    <p class="meta">Zamknij przeglądarkę i wróć: motyw zostanie, bo ciasteczko żyje rok.</p>
  </main>
</body>
</html>

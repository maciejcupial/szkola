<?php
// Worked example: remembering a visitor with a session, a cookie and a file.

// Before any output, even an empty line before <?php.
session_start();

if (isset($_POST["logout"])) {
    // session_destroy() does not empty $_SESSION of this request.
    $_SESSION = [];
    session_destroy();
} elseif (!empty($_POST["userName"])) {
    $_SESSION["userName"] = trim($_POST["userName"]);
}

$userName = $_SESSION["userName"] ?? "";

if (!isset($_COOKIE["visitCount"])) {
    $visitCount = 1;
} else {
    $visitCount = intval($_COOKIE["visitCount"]) + 1;
}

// $_COOKIE changes only with the next request, so the page prints $visitCount.
setcookie("visitCount", $visitCount, time() + 60 * 60 * 24 * 30);

// TU ZMIEŃ: nazwa pliku, w którym serwer liczy wyświetlenia wszystkich odwiedzających
$viewsFile = "views.txt";

if (file_exists($viewsFile)) {
    $totalViews = intval(file_get_contents($viewsFile)) + 1;
} else {
    $totalViews = 1;
}

file_put_contents($viewsFile, $totalViews);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sesja, ciasteczko i plik</title>
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
      margin-bottom: 16px;
    }

    .meta {
      color: var(--muted);
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
  <main>
    <section class="card">
      <h1>Strona, która Cię pamięta</h1>
      <?php if ($userName): ?>
        <p>Witaj, <?= htmlspecialchars($userName) ?>!</p>
        <form method="post" action="index.php">
          <button class="button" type="submit" name="logout" value="1">Wyloguj</button>
        </form>
      <?php else: ?>
        <p>Nie znam jeszcze Twojego imienia.</p>
        <form method="post" action="index.php">
          <label for="user-name">Imię</label>
          <input id="user-name" name="userName">
          <button class="button" type="submit">Zapisz</button>
        </form>
      <?php endif; ?>
    </section>

    <section class="card">
      <p>To Twoje wejście numer <?= $visitCount ?> (ciasteczko).</p>
      <p>Wszystkich wyświetleń tej strony: <?= $totalViews ?> (plik na serwerze).</p>
      <p class="meta">Zamknij całą przeglądarkę i wróć: imię zniknie, liczniki zostaną.</p>
    </section>
  </main>
</body>
</html>

<?php
// Task 1 of 6: a visit counter in $_SESSION["visitCount"] with a reset button.
// Expected:
//   first load:  To Twoje wejście numer 1 w tej sesji.
//   third load (F5 twice):  To Twoje wejście numer 3 w tej sesji.
//   after clicking „Wyzeruj licznik”:  To Twoje wejście numer 1 w tej sesji.
//   after closing the whole browser and opening the page again:  numer 1 (the session is gone).

// TU ZMIEŃ: uruchom sesję (przed jakimkolwiek wypisaniem)

// TU ZMIEŃ: gdy przyszło pole reset z przycisku, usuń klucz visitCount z sesji funkcją unset()

// TU ZMIEŃ: brak visitCount w sesji: zapisz 1, inaczej dodaj 1; przepisz liczbę do $visitCount
$visitCount = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: licznik w sesji</title>
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
    <h1>Zadanie 1: licznik w sesji</h1>
    <p class="meta">Odśwież stronę kilka razy (F5), a potem kliknij przycisk.</p>
    <p>To Twoje wejście numer <?= $visitCount ?> w tej sesji.</p>
    <form method="post" action="01-session-counter.php">
      <button class="button" type="submit" name="reset" value="1">Wyzeruj licznik</button>
    </form>
  </main>
</body>
</html>

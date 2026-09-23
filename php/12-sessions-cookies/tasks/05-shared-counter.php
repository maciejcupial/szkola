<?php
// Task 5 of 6: a shared counter in counter.txt and a private one in the session.
// Expected (no counter.txt at the start):
//   browser A, first load:  Wszystkich wyświetleń: 1. Twoich wyświetleń w tej sesji: 1.
//   browser A, two more loads (F5):  Wszystkich wyświetleń: 3. Twoich wyświetleń w tej sesji: 3.
//   browser B (another browser or a private window), first load:  Wszystkich: 4, Twoich: 1.
//   back in browser A, one more load:  Wszystkich: 5, Twoich: 4.

session_start();

$counterFile = "counter.txt";

// TU ZMIEŃ: licznik wspólny: plik istnieje, to liczba z pliku + 1, inaczej 1; zapisz ją do pliku
$totalViews = 0;

// TU ZMIEŃ: licznik prywatny w $_SESSION["myViews"], tak samo jak w zadaniu 1
$myViews = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: licznik w pliku</title>
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
    <h1>Zadanie 5: licznik w pliku</h1>
    <p>Wszystkich wyświetleń: <?= $totalViews ?>. Twoich wyświetleń w tej sesji: <?= $myViews ?>.</p>
    <p class="meta">
      Otwórz stronę w drugiej przeglądarce: pierwszy licznik rośnie dalej, drugi startuje od 1.
    </p>
  </main>
</body>
</html>

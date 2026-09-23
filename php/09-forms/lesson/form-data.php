<?php
// The page sends data to itself with GET and POST and prints what arrived.
// Lesson 18, slides 3-5.
header("Content-Type: text/html; charset=UTF-8");

$method = $_SERVER["REQUEST_METHOD"] ?? "brak";   // GET, after „Wyślij POST”: POST
// print_r(..., true) returns the text instead of printing it.
$getDump = print_r($_GET, true);    // After the link: Array ( [userName] => Jan )
$postDump = print_r($_POST, true);  // After POST: Array ( [userName] => Jan [userMessage] => Czesc )
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Droga danych z formularza</title>
</head>
<body>
  <h2>Lekcja 18, slajd 3: jak dane trafiają z formularza do PHP?</h2>
  <p>To żądanie przyszło metodą: <?= htmlspecialchars($method) ?></p>

  <h2>Lekcja 18, slajd 4: method="get" czy method="post"?</h2>
  <form action="form-data.php" method="get">
    <label for="get-name">Imię (GET)</label>
    <input id="get-name" type="text" name="userName">
    <button type="submit">Wyślij GET</button>
  </form>
  <p><a href="form-data.php?userName=Jan">form-data.php?userName=Jan</a></p>

  <form action="form-data.php" method="post">
    <label for="post-name">Imię (POST)</label>
    <input id="post-name" type="text" name="userName">
    <label for="post-message">Wiadomość (POST)</label>
    <input id="post-message" type="text" name="userMessage">
    <button type="submit">Wyślij POST</button>
  </form>

  <h2>Lekcja 18, slajd 5: $_POST, klucze to nazwy pól</h2>
  <pre>$_GET = <?= htmlspecialchars($getDump) ?></pre>
  <pre>$_POST = <?= htmlspecialchars($postDump) ?></pre>
</body>
</html>

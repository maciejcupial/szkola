<?php
// Task 1 of 5: contact form that receives its own data.
// Expected for Imię = Jan, Wiadomość = Czesc:
//   Dziękujemy, Jan! Otrzymaliśmy wiadomość: Czesc

$thankYou = "";

if (isset($_POST["userName"])) {
    // TU ZMIEŃ: odczytaj oba pola do $name i $message, a potem zapisz w $thankYou:
    // "Dziękujemy, " + imię + "! Otrzymaliśmy wiadomość: " + wiadomość
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 1: formularz kontaktowy</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    .ok {
      color: #15803d;
    }
  </style>
</head>
<body>
  <h1>Zadanie 1: formularz kontaktowy</h1>
  <p>Odczytaj oba pola z tablicy <code>$_POST</code> i wypisz podziękowanie z imieniem i wiadomością.</p>

  <form action="01-contact.php" method="post">
    <p>
      <label for="name">Imię</label>
      <input id="name" name="userName" type="text">
    </p>
    <p>
      <label for="message">Wiadomość</label>
      <input id="message" name="userMessage" type="text">
    </p>
    <button type="submit">Wyślij</button>
  </form>

  <?php if ($thankYou !== ""): ?>
    <p class="ok"><?= htmlspecialchars($thankYou) ?></p>
  <?php endif; ?>
</body>
</html>

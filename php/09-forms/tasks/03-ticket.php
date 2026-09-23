<?php
// Task 3 of 5: ticket price form that checks the data and keeps what was typed.
// Expected:
//   Imię = Ola, Wiek = 15   ->  Ola, Twój bilet kosztuje 10 zł.
//   Imię = Ola, Wiek = 200  ->  Podaj wiek od 1 do 120.  (and the fields still show Ola and 200)
//   both fields empty       ->  Pole „Imię” jest wymagane.  and  Pole „Wiek” jest wymagane.

// TU ZMIEŃ: warunki if / elseif: poniżej 7 lat 0 zł, poniżej 18 lat 10 zł, od 65 lat 12 zł,
// pozostali 20 zł
function ticketPrice($age)
{
    return 0;
}

$userName = "";
$userAge = "";
$errors = [];
$ticketMessage = "";

if (isset($_POST["userName"])) {
    $userName = trim($_POST["userName"] ?? "");
    $userAge = trim($_POST["userAge"] ?? "");

    // TU ZMIEŃ: każdy błąd dopisz przez $errors[] = "..."; wiek zamień przez (int) $userAge.
    // Bez błędów: $ticketMessage = imię + ", Twój bilet kosztuje " + ticketPrice(wiek) + " zł."
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: cena biletu</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    .error {
      color: #b91c1c;
    }

    .ok {
      color: #15803d;
    }
  </style>
</head>
<body>
  <h1>Zadanie 3: cena biletu</h1>
  <p>Sprawdź imię i wiek, pokaż błędy albo cenę biletu.</p>
  <p>Po błędzie wpisane dane mają zostać w polach.</p>

  <?php if (count($errors) > 0): ?>
    <ul class="error">
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php if ($ticketMessage !== ""): ?>
    <p class="ok"><?= htmlspecialchars($ticketMessage) ?></p>
  <?php endif; ?>

  <form action="03-ticket.php" method="post" novalidate>
    <!-- TU ZMIEŃ: dopisz w obu polach value z $userName albo $userAge, jak w index.php -->
    <p>
      <label for="name">Imię</label>
      <input id="name" name="userName" type="text">
    </p>
    <p>
      <label for="age">Wiek</label>
      <input id="age" name="userAge" type="number">
    </p>
    <button type="submit">Oblicz cenę</button>
  </form>
</body>
</html>

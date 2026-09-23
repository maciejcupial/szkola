<?php
// Contact form that sends to itself, validates and keeps typed values.

$userName = "";
$userEmail = "";
$userMessage = "";

// Keyed by field name.
$errors = [];

if (isset($_POST["userName"])) {
    // trim(): a field with only spaces counts as empty.
    $userName = trim($_POST["userName"] ?? "");
    $userEmail = trim($_POST["userEmail"] ?? "");
    $userMessage = trim($_POST["userMessage"] ?? "");

    if (empty($userName)) {
        $errors["userName"] = "Pole „Imię” jest wymagane.";
    }

    if (empty($userEmail)) {
        $errors["userEmail"] = "Pole „E-mail” jest wymagane.";
    } elseif (filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        $errors["userEmail"] = "Podaj poprawny adres e-mail.";
    }

    if (empty($userMessage)) {
        $errors["userMessage"] = "Pole „Wiadomość” jest wymagane.";
    }
}

$isSent = isset($_POST["userName"]) && count($errors) === 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TU ZMIEŃ: tytuł strony -->
  <title>Formularz kontaktowy</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }

    form {
      display: grid;
      gap: 6px;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    input,
    textarea,
    button {
      font: inherit;
      padding: 8px;
    }

    .error {
      color: #b91c1c;
    }

    .invalid {
      border: 2px solid #b91c1c;
    }

    .ok {
      color: #15803d;
    }
  </style>
</head>
<body>
  <h1>Napisz do nas</h1>

<?php // Alternative syntax: if (...): ... else: ... endif; ?>
<?php if ($isSent): ?>
  <p class="ok">
    Dziękujemy, <?= htmlspecialchars($userName) ?>! Odpiszemy na <?= htmlspecialchars($userEmail) ?>
  </p>
  <p><a href="index.php">Wyślij kolejną wiadomość</a></p>
<?php else: ?>
  <!-- novalidate: skip the browser's checks so PHP does them -->
  <form action="index.php" method="post" novalidate>
    <label for="name">Imię</label>
    <!-- value="..." keeps the typed text after an error -->
    <input id="name" name="userName" type="text"
           value="<?= htmlspecialchars($userName) ?>"
           class="<?= isset($errors["userName"]) ? "invalid" : "" ?>">
    <?php if (isset($errors["userName"])): ?>
      <span class="error" id="error-name"><?= htmlspecialchars($errors["userName"]) ?></span>
    <?php endif; ?>

    <label for="email">E-mail</label>
    <input id="email" name="userEmail" type="email"
           value="<?= htmlspecialchars($userEmail) ?>"
           class="<?= isset($errors["userEmail"]) ? "invalid" : "" ?>">
    <?php if (isset($errors["userEmail"])): ?>
      <span class="error" id="error-email"><?= htmlspecialchars($errors["userEmail"]) ?></span>
    <?php endif; ?>

    <label for="message">Wiadomość</label>
    <!-- textarea has no value attribute: the text goes between the tags -->
    <textarea id="message" name="userMessage" rows="4"
              class="<?= isset($errors["userMessage"]) ? "invalid" : "" ?>"><?=
        htmlspecialchars($userMessage) ?></textarea>
    <?php if (isset($errors["userMessage"])): ?>
      <span class="error" id="error-message"><?= htmlspecialchars($errors["userMessage"]) ?></span>
    <?php endif; ?>

    <!-- TU ZMIEŃ: dodaj własne pole, np. temat (label, input, sprawdzenie w PHP, błąd pod polem) -->

    <button type="submit">Wyślij</button>
  </form>
<?php endif; ?>
</body>
</html>

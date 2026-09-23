<?php
// Receives form.html: checks required fields, prints errors or the sent data.

// TU ZMIEŃ: pola wymagane. Po lewej name z formularza, po prawej polska etykieta.
$requiredFields = [
    "name" => "Imię",
    "email" => "E-mail",
    "message" => "Wiadomość",
];

$errors = [];

foreach ($requiredFields as $fieldName => $label) {
    // ?? avoids a warning when the field was not sent at all
    $value = $_POST[$fieldName] ?? "";

    // trim(): a field with only spaces counts as empty
    if (trim($value) === "") {
        $errors[] = "Pole „" . $label . "” jest puste.";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Odbiór formularza</title>
  <style>
    /* Same colors as form.html */
    :root {
      --background: #f5f6f8;
      --text: #1f2430;
      --muted: #5b6472;
      --accent: #2563eb;
      --border: #d3d8e0;
      --card: #ffffff;
    }

    * {
      box-sizing: border-box;
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

    .error {
      color: #b91c1c;
    }

    .ok {
      color: #15803d;
    }

    .meta {
      color: var(--muted);
    }

    dt {
      font-weight: bold;
      margin-top: 12px;
    }

    dd {
      margin: 4px 0 0 0;
    }

    a {
      color: var(--accent);
    }
  </style>
</head>
<body>
<?php if ($errors): ?>
  <main class="card">
    <h1>Popraw formularz</h1>
    <p class="meta">Te pola trzeba uzupełnić:</p>
    <ul class="error">
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
    <p><a href="form.html">Wróć do formularza</a></p>
  </main>
<?php else: ?>
  <main class="card">
    <h1 class="ok">Dziękujemy!</h1>
    <p class="meta">Oto dane, które przyszły z formularza:</p>
    <?php // nl2br() goes after htmlspecialchars(), or its <br> gets escaped ?>
    <dl>
      <?php foreach ($_POST as $fieldName => $value): ?>
        <dt><?= htmlspecialchars($requiredFields[$fieldName] ?? $fieldName) ?></dt>
        <dd><?= nl2br(htmlspecialchars($value)) ?></dd>
      <?php endforeach; ?>
    </dl>
    <p><a href="form.html">Wyślij kolejne zgłoszenie</a></p>
  </main>
<?php endif; ?>
</body>
</html>

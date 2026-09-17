<?php
// Receiving script for form.html: it reads the sent fields, checks that none of the required
// ones is empty and then prints either the list of errors or the data that arrived.
// The browser never sees this code, only the HTML that the script prints at the end.

// TU ZMIEŃ: lista pól wymaganych. Po lewej stronie nazwa z atrybutu name, po prawej polska etykieta.
// One array does two jobs: the keys say which fields cannot be empty, the values are the labels
// printed on screen, so a new field is added in exactly one place.
$requiredFields = [
    "name" => "Imię",
    "email" => "E-mail",
    "message" => "Wiadomość",
];

// Collected error messages; an empty array means the form is correct.
$errors = [];

// $_POST is an array PHP builds from the data sent with method="post"; the keys are the name attributes.
foreach ($requiredFields as $fieldName => $label) {
    // ?? gives the value on the right when the key does not exist at all, so PHP does not warn about it.
    // isset() is the longer way of asking the same thing: does this key exist and is it not null.
    $value = $_POST[$fieldName] ?? "";

    // trim() cuts spaces, tabs and line breaks from both ends, so a field with only spaces counts as empty.
    if (trim($value) === "") {
        $errors[] = "Pole „" . $label . "” jest puste.";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- Same two meta tags as in the form: UTF-8 for Polish letters, viewport for phones -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Odbiór formularza</title>
  <style>
    /* The same colors as in form.html, so both pages look like one project */
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

    /* Error list: red text marks what the user has to fix */
    .error {
      color: #b91c1c;
    }

    /* Success message above the list of received data */
    .ok {
      color: #15803d;
    }

    .meta {
      color: var(--muted);
    }

    /* dt is the label of an item, dd is its value; the pair comes from the <dl> list below */
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
<?php // Alternative syntax: if (...): ... endif; works exactly like curly braces, but it is easier to
      // read when HTML sits between the lines, because the closing word says which block just ended. ?>
<?php if ($errors): ?>
  <main class="card">
    <h1>Popraw formularz</h1>
    <p class="meta">Te pola trzeba uzupełnić:</p>
    <?php // htmlspecialchars() turns < > " & into harmless text, so nobody can inject HTML or
          // JavaScript into the page through a form field. Every printed value needs it. ?>
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
    <?php // A field outside the required list (added to the form later) has no Polish label yet,
          // so ?? falls back to its raw name attribute instead of printing nothing.
          // nl2br() adds <br> where the user pressed Enter, because HTML ignores plain line breaks;
          // it runs after htmlspecialchars(), otherwise those <br> tags would be escaped as well. ?>
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

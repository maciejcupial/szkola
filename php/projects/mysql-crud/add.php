<?php
// New record: shows the form (GET) and saves it (POST).
require "config.php";

// The form prints these, so after an error the fields stay filled in
$error = "";
$title = "";
$body = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        $error = "Tytuł i treść są wymagane.";
    } else {
        // ? placeholders: form text is always a value, never SQL (no SQL injection)
        $stmt = $pdo->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
        $stmt->execute([$title, $body]);

        // Redirect, so a refresh does not save the record twice
        header("Location: list.php");
        exit;
    }
}

$pageTitle = "Nowy wpis";
require "header.php";
?>
<?php if ($error): ?>
  <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<!-- No action: the form posts back to this file -->
<form method="post">
  <label for="title">Tytuł</label>
  <input id="title" name="title" type="text" maxlength="120" value="<?= htmlspecialchars($title) ?>">

  <label for="body">Treść</label>
  <!-- textarea has no value attribute: content goes between the tags -->
  <textarea id="body" name="body" rows="6"><?= htmlspecialchars($body) ?></textarea>

  <!-- TU ZMIEŃ: pole na każdą nową kolumnę z database.sql; dopisz je też do INSERT wyżej -->

  <div>
    <button type="submit">Zapisz</button>
    <a class="button" href="list.php">Anuluj</a>
  </div>
</form>
<?php
require "footer.php";

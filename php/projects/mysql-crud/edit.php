<?php
// Edit the record from ?id=...
require "config.php";

// (int): "7 OR 1=1" becomes 7
$id = (int) ($_GET["id"] ?? 0);

$stmt = $pdo->prepare("SELECT id, title, body FROM posts WHERE id = ?");
$stmt->execute([$id]);
// false when nothing matched
$post = $stmt->fetch();

$title = $post["title"] ?? "";
$body = $post["body"] ?? "";
$error = "";

if ($post && $_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        $error = "Tytuł i treść są wymagane.";
    } else {
        // UPDATE without WHERE would change every row
        $stmt = $pdo->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $stmt->execute([$title, $body, $id]);
        header("Location: list.php");
        exit;
    }
}

$pageTitle = $post ? "Edycja wpisu" : "Nie ma takiego wpisu";
require "header.php";
?>
<?php if (!$post): ?>
  <p>Wpis o tym numerze nie istnieje. Mógł zostać wcześniej usunięty.</p>
  <p><a class="button" href="list.php">Wróć do listy</a></p>
<?php else: ?>
<?php if ($error): ?>
  <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<!-- Keep ?id=... so the POST knows which record to save -->
<form method="post" action="edit.php?id=<?= (int) $post["id"] ?>">
  <label for="title">Tytuł</label>
  <input id="title" name="title" type="text" maxlength="120" value="<?= htmlspecialchars($title) ?>">

  <label for="body">Treść</label>
  <textarea id="body" name="body" rows="6"><?= htmlspecialchars($body) ?></textarea>

  <!-- TU ZMIEŃ: te same pola co w add.php, plus kolumny dopisane do zapytania UPDATE wyżej -->

  <div>
    <button type="submit">Zapisz zmiany</button>
    <a class="button" href="list.php">Anuluj</a>
  </div>
</form>
<?php endif; ?>
<?php
require "footer.php";

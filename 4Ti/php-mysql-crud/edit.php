<?php
// Edit form for one record. list.php links here with ?id=... , this file reads that record,
// shows it in a form and saves the changed values back into the same row of the posts table.
// On success it goes to list.php; on an error it shows the form again with what was typed.
require "config.php";

// (int) casting turns whatever sits in the address into a whole number: "7" becomes 7 and
// "7 OR 1=1" becomes 7, so nothing but a number can ever reach the query. ?? 0 covers a
// missing id, and 0 simply matches no record.
$id = (int) ($_GET["id"] ?? 0);

// Prepared statement again: the ? is filled by the database with the value from execute().
$stmt = $pdo->prepare("SELECT id, title, body FROM posts WHERE id = ?");
$stmt->execute([$id]);
// fetch() returns one row, or false when the query matched nothing.
$post = $stmt->fetch();

if (!$post) {
    // A wrong id is not a crash, so the page says it in plain Polish and stops.
    $pageTitle = "Nie ma takiego wpisu";
    require "header.php";
    echo "<p>Wpis o tym numerze nie istnieje. Mógł zostać wcześniej usunięty.</p>";
    echo '<p><a class="button" href="list.php">Wróć do listy</a></p>';
    require "footer.php";
    exit;
}

// The fields start with what the database holds. A failed save replaces them below with what
// the user typed, which is how the form comes back filled in instead of empty.
$title = $post["title"];
$body = $post["body"];
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        $error = "Tytuł i treść są wymagane.";
    } else {
        // UPDATE without WHERE would rewrite every row in the table, so the id is never optional.
        $stmt = $pdo->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $stmt->execute([$title, $body, $id]);
        header("Location: list.php");
        exit;
    }
}

$pageTitle = "Edycja wpisu";
require "header.php";
?>
<?php if ($error): ?>
  <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<!-- The action keeps ?id=... in the address, so the script still knows which record to save -->
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
<?php
require "footer.php";

<?php
// Delete: GET only asks, the POST form below deletes.
require "config.php";

// Never delete on GET: browsers and bots open links without a click
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = (int) ($_POST["id"] ?? 0);
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: list.php");
    exit;
}

$id = (int) ($_GET["id"] ?? 0);
$stmt = $pdo->prepare("SELECT id, title FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();

$pageTitle = "Usuń wpis";
require "header.php";
?>
<?php if (!$post): ?>
  <p>Nie ma wpisu o tym numerze. Mógł zostać już usunięty.</p>
  <p><a class="button" href="list.php">Wróć do listy</a></p>
<?php else: ?>
  <p>Na pewno usunąć wpis „<?= htmlspecialchars($post["title"]) ?>”? Tej operacji nie da się cofnąć.</p>

  <form method="post" action="delete.php">
    <input type="hidden" name="id" value="<?= (int) $post["id"] ?>">

    <div>
      <button type="submit" class="delete">Tak, usuń</button>
      <a class="button" href="list.php">Nie, wróć</a>
    </div>
  </form>
<?php endif; ?>
<?php
require "footer.php";

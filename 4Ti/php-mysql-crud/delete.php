<?php
// Deleting one record in two steps: opening delete.php?id=... only asks the question,
// and the answer is sent by the form below as POST, which is what actually deletes the row.
// Both steps end on list.php. The record is found by the id that list.php put in the link.
require "config.php";

// A link is a GET request, and GET addresses get opened without anyone clicking: browsers
// prefetch them, antivirus tools and chat apps check them, search engines crawl them. A delete
// that runs on GET therefore wipes records nobody asked to remove, and the browser can even
// repeat it when the page is refreshed. POST is sent only by a submitted form, so deleting
// happens here and nowhere else.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // The id arrives from the hidden field of the form, not from the address.
    $id = (int) ($_POST["id"] ?? 0);
    // DELETE with a prepared statement and a WHERE on the id: exactly one row, never the table.
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: list.php");
    exit;
}

// GET: read the record only to show its title in the question.
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
    <!-- A hidden field is not shown to the user but is sent with the form, so the POST request
         carries the id of the record to delete -->
    <input type="hidden" name="id" value="<?= (int) $post["id"] ?>">

    <div>
      <button type="submit" class="delete">Tak, usuń</button>
      <a class="button" href="list.php">Nie, wróć</a>
    </div>
  </form>
<?php endif; ?>
<?php
require "footer.php";

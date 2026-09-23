<?php
// Start page: table of all records.
require "config.php";

// query() without ? is safe only because no user text is in the SQL
$posts = $pdo->query("SELECT id, title, created_at FROM posts ORDER BY created_at DESC")->fetchAll();

$pageTitle = "Wpisy";
require "header.php";
?>
<p><a class="button" href="add.php">Dodaj wpis</a></p>

<?php if (!$posts): ?>
  <!-- An empty array counts as false -->
  <p>Jeszcze nie ma żadnych wpisów. Kliknij „Dodaj wpis”, żeby zapisać pierwszy.</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th scope="col">Tytuł</th>
        <th scope="col">Data wpisu</th>
        <th scope="col">Akcje</th>
        <!-- TU ZMIEŃ: nagłówki kolumn; każdy potrzebuje <td> niżej i kolumny w SELECT -->
      </tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $post): ?>
        <tr>
          <td><?= htmlspecialchars($post["title"]) ?></td>
          <td class="meta"><?= htmlspecialchars($post["created_at"]) ?></td>
          <td>
            <a class="button" href="edit.php?id=<?= (int) $post["id"] ?>">Edytuj</a>
            <a class="button delete" href="delete.php?id=<?= (int) $post["id"] ?>">Usuń</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>
<?php
require "footer.php";

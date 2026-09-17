<?php
// Start page of the application: reads every record from the posts table and shows it in a table.
// From here you go to add.php (new record), edit.php?id=... and delete.php?id=... .
// The connection comes from config.php, the layout from header.php and footer.php.
require "config.php";

// query() sends a fixed piece of SQL, which is safe only because nothing typed by a user is in it.
// ORDER BY created_at DESC sorts by date, DESC meaning from the newest down.
// fetchAll() brings every row back at once as an array of arrays; fetch() returns a single row.
$posts = $pdo->query("SELECT id, title, created_at FROM posts ORDER BY created_at DESC")->fetchAll();

// header.php prints this text in the browser tab and as the heading of the page.
$pageTitle = "Wpisy";
require "header.php";
?>
<!-- A link styled as a button, so the main action is the first thing you see -->
<p><a class="button" href="add.php">Dodaj wpis</a></p>

<?php if (!$posts): ?>
  <!-- An empty array counts as false, so this is the message for a table with no rows yet -->
  <p>Jeszcze nie ma żadnych wpisów. Kliknij „Dodaj wpis”, żeby zapisać pierwszy.</p>
<?php else: ?>
  <table>
    <!-- thead holds the header row, tbody the data rows, which is what screen readers expect -->
    <thead>
      <tr>
        <!-- scope="col" says this heading describes the whole column below it -->
        <th scope="col">Tytuł</th>
        <th scope="col">Data wpisu</th>
        <th scope="col">Akcje</th>
        <!-- TU ZMIEŃ: nagłówki kolumn. Każdy nowy nagłówek potrzebuje komórki <td> niżej
             oraz swojej kolumny w zapytaniu SELECT na górze pliku. -->
      </tr>
    </thead>
    <tbody>
      <!-- foreach walks through the array and gives you one row at a time as $post -->
      <?php foreach ($posts as $post): ?>
        <tr>
          <!-- htmlspecialchars() on every value from the database: text stays text on the page -->
          <td><?= htmlspecialchars($post["title"]) ?></td>
          <td class="meta"><?= htmlspecialchars($post["created_at"]) ?></td>
          <td>
            <!-- (int) casting throws away anything that is not a number, so the address in the
                 link can only ever carry a plain id, never a piece of SQL or HTML -->
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

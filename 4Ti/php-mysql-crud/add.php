<?php
// Form for a new record. The same file does two jobs: on a normal visit it shows an empty form,
// and after the form is submitted it checks the data and writes one row into the posts table.
// On success it sends the browser to list.php; on an error it shows the form again, filled in.
require "config.php";

// Starting values. The form below always prints these variables, which is what refills the
// fields after a failed attempt, so nobody has to type the whole text a second time.
$error = "";
$title = "";
$body = "";

// $_SERVER["REQUEST_METHOD"] tells you how the page was opened: GET for a normal visit,
// POST for a submitted form. === compares value and type, unlike == which converts first.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // ?? gives the value on the left, or the one on the right when the field was not sent at all.
    // trim() cuts spaces, tabs and line breaks off both ends, so " " does not pass as a title.
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        $error = "Tytuł i treść są wymagane.";
    } else {
        // A prepared statement sends the SQL and the values separately. The question marks are
        // placeholders: the database already knows the shape of the query, so text from the form
        // can only land in them as a value and never be read as extra SQL. That is what stops
        // SQL injection, and it is the only way queries are written in this folder.
        $stmt = $pdo->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
        // The array order matches the question marks: first one gets $title, second one $body.
        $stmt->execute([$title, $body]);

        // header("Location: ...") tells the browser to open another address. exit stops the script
        // at once, because anything printed after a redirect would only be wasted work. The
        // redirect also means a refresh reloads list.php instead of saving the record twice.
        header("Location: list.php");
        exit;
    }
}

$pageTitle = "Nowy wpis";
require "header.php";
?>
<?php if ($error): ?>
  <!-- Shown only when the check above failed; the fields below keep what was typed -->
  <p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<!-- No action attribute means the form posts back to this same file -->
<form method="post">
  <!-- Every field has a <label for> pointing at the id of its input, so clicking the text
       puts the cursor in the field, and the name attribute is the key used in $_POST -->
  <label for="title">Tytuł</label>
  <input id="title" name="title" type="text" maxlength="120" value="<?= htmlspecialchars($title) ?>">

  <label for="body">Treść</label>
  <!-- A textarea has no value attribute, its content goes between the tags -->
  <textarea id="body" name="body" rows="6"><?= htmlspecialchars($body) ?></textarea>

  <!-- TU ZMIEŃ: kolejne pola formularza, po jednym na każdą nową kolumnę z database.sql.
       Pamiętaj, żeby dopisać je też do zapytania INSERT wyżej. -->

  <div>
    <button type="submit">Zapisz</button>
    <a class="button" href="list.php">Anuluj</a>
  </div>
</form>
<?php
require "footer.php";

<?php
// Lesson 26, slide 4: request 1. Send Jan, then open welcome.php.
header("Content-Type: text/html; charset=UTF-8");

// "" and "0" count as empty, like empty() in the if below.
$userName = $_POST["userName"] ?? "";   // Jan after sending the form
?>
<h2>Lekcja 26, slajd 4: żądanie 1, form.php</h2>
<form action="form.php" method="post">
  <label for="user-name">Imię</label> <input id="user-name" name="userName">
  <button type="submit">Wyślij</button>
</form>
<?php if ($userName): ?>
  Serwer zna imię: <?= htmlspecialchars($userName) ?><br>
<?php endif; ?>
<a href="welcome.php">Przejdź do welcome.php</a>

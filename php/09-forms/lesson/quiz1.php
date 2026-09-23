<?php
// Exam question (E.14 styczeń 2018 zad. 35), answer B.
// Lesson 18, slide 7.
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pytanie egzaminacyjne</title>
</head>
<body>
  <h2>Lekcja 18, slajd 7: co jest w tablicy $_POST?</h2>
  <form action="quiz1.php" method="post">
    <label for="im">Pole im</label>
    <input id="im" name="im">
    <button type="submit">Wyślij</button>
  </form>
  <pre><?= htmlspecialchars(print_r($_POST, true)) ?></pre>
  <?php // Array ( ), after „Janek”: Array ( [im] => Janek ) ?>
</body>
</html>

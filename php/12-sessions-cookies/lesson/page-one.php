<?php
// Lesson 26, slides 7 and 10: saves the name in the session.
session_start();
header("Content-Type: text/html; charset=UTF-8");

if (!empty($_POST["userName"])) {
    $_SESSION["userName"] = $_POST["userName"];
}
echo '<form action="page-one.php" method="post">';
echo '<label for="user-name">Imię</label> <input id="user-name" name="userName">';
echo '<button type="submit">Zapisz</button></form>';
echo '<a href="page-two.php">Przejdź dalej</a>';

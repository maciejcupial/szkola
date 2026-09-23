<?php
// Lesson 26, slide 4: request 1. Send Jan, then open welcome.php.
header("Content-Type: text/html; charset=UTF-8");

echo "<h2>Lekcja 26, slajd 4: żądanie 1, form.php</h2>";
echo '<form action="form.php" method="post">';
echo '<label for="user-name">Imię</label> <input id="user-name" name="userName">';
echo '<button type="submit">Wyślij</button></form>';

if (!empty($_POST["userName"])) {
    $userName = $_POST["userName"];
    echo "Serwer zna imię: " . htmlspecialchars($userName) . "<br>";   // Serwer zna imię: Jan
}
echo '<a href="welcome.php">Przejdź do welcome.php</a>';

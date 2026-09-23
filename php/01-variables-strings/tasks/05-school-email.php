<?php
// Task 5 of 5 (for volunteers): build a school e-mail address from a name.
// Expected:
//   Adres: mikolaj.wojcik@example.com
//   Długość adresu: 26 znaków
//   Litera „o” występuje 3 razy.

$firstName = "Mikołaj";
$lastName = "Wójcik";

// TU ZMIEŃ: zamień imię na małe litery i podmień „ł” na „l”
$login = $firstName;

// TU ZMIEŃ: dopisz do $login kropkę i nazwisko małymi literami, z „ó” zamienionym na „o”

// TU ZMIEŃ: sklej $login z domeną „@example.com”
$email = $login;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: szkolny e-mail</title>
</head>
<body>
  <h1>Zadanie 5 dla chętnych: szkolny e-mail</h1>
  <p>Zbuduj adres e-mail z imienia i nazwiska: małe litery, bez polskich znaków, kropka
    między imieniem a nazwiskiem. Potem policz jego długość i to, ile razy jest w nim litera „o”.</p>

  <p>
    <?php
        // substr_count(text, piece) counts how many times the piece appears.
        echo "Adres: " . htmlspecialchars($email) . "<br>";

        // TU ZMIEŃ: wstaw długość adresu zamiast 0
        echo "Długość adresu: 0 znaków<br>";

        // TU ZMIEŃ: wstaw wynik substr_count() zamiast 0
        echo "Litera „o” występuje 0 razy.";
    ?>
  </p>
</body>
</html>

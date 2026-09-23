<?php
// Task 6 of 6 (dla chętnych): include the subpage named in ?page=, only if allowed.
// Without the check ?page=../../secret could load any file. Expected, under the menu:
//   06-router.php               Start / Witaj w naszym sklepie z artykułami szkolnymi.
//   06-router.php?page=offer    Oferta / Kubki, długopisy i zeszyty w dobrych cenach.
//   06-router.php?page=contact  Kontakt / Napisz: sklep@example.com
//   06-router.php?page=abc      Nie ma takiej strony.
header("Content-Type: text/html; charset=UTF-8");

// Each name has a file 06-pages/<name>.php.
$allowedPages = ["home", "offer", "contact"];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 6: jedna strona, wiele podstron</title>
</head>
<body>
  <h1>Sklep szkolny</h1>
  <nav>
    <a href="06-router.php">Start</a> |
    <a href="06-router.php?page=offer">Oferta</a> |
    <a href="06-router.php?page=contact">Kontakt</a>
  </nav>
  <main>
    <?php
    // TU ZMIEŃ: $_GET["page"] ?? "home", sprawdź in_array(), include albo „Nie ma takiej strony.”
    include "06-pages/home.php";
    ?>
  </main>
</body>
</html>

<?php
// Task 5: shared top. Sees $pageTitle and $currentPage from the including page.

$menuItems = [
    "05-home.php" => "Start",
    "05-contact.php" => "Kontakt",
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TU ZMIEŃ: zamiast stałego tekstu wypisz $pageTitle (przez htmlspecialchars) -->
  <title>Moja strona</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 640px;
      margin: 40px auto;
      padding: 0 16px;
    }
    nav a {
      margin-right: 12px;
    }
    nav a.active {
      font-weight: bold;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <!-- TU ZMIEŃ: zamiast stałego tekstu wypisz $pageTitle (przez htmlspecialchars) -->
  <h1>Moja strona</h1>
  <nav>
    <?php
    // TU ZMIEŃ: menu pętlą foreach po $menuItems; link $currentPage z class="active"
    ?>
    <a href="05-home.php">Start</a>
    <a href="05-contact.php">Kontakt</a>
  </nav>
  <main>

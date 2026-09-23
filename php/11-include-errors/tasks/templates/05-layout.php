<?php
// Task 5: view of both pages. $pageTitle, $currentPage, $pageText and $menuItems come from the controller.
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
    <!-- TU ZMIEŃ: menu pętlą foreach po $menuItems; link $currentPage z class="active" -->
    <a href="05-home.php">Start</a>
    <a href="05-contact.php">Kontakt</a>
  </nav>
  <main>
    <p><?= htmlspecialchars($pageText) ?></p>
  </main>
  <footer>
    <p>Moja strona, wszystkie podstrony z jednego szablonu.</p>
  </footer>
</body>
</html>
